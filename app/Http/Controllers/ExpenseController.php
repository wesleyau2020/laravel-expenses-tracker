<?php

namespace App\Http\Controllers;

use App\Models\Expense; // Import the Expense model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    // Display a listing of the expenses
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $expenses = Expense::all();
            return DataTables::of($expenses)
                ->addColumn('action', function ($expense) {
                    return '
                        <a href="' . route('expenses.edit', $expense->id) . '" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" onclick="deleteExpense(' . $expense->id . ')">Delete</button>
                    ';
                })
                ->make(true);
        } else {
            $expenses = Expense::select('*')->get();

            $currentYear = Carbon::now()->year;
            $expensesGrouped = Expense::selectRaw('MONTH(date) as month, category, SUM(amount) as total_amount')
                ->whereYear('date', $currentYear)
                ->groupBy('month', 'category')
                ->orderBy('month')
                ->get();
    
            $categories = config('global.categories');
            $monthlyData = [];
        
            foreach ($categories as $category) {
                $monthlyData[$category] = [];
                for ($month = 1; $month <= 12; $month++) {
                    // Sum the expenses for each category and month
                    $total = $expensesGrouped->where('category', $category)->where('month', $month)->sum('total_amount');
                    $monthlyData[$category][] = $total;
                }
            }

            // Log::info("ExpenseController expensesGrouped", [$expensesGrouped]);
            // Log::info("ExpenseController monthlyData", [$monthlyData]);
    
            return view('expenses.index', compact('expenses', 'expensesGrouped', 'monthlyData', 'categories'));
        }
    }

    // Show the form for creating a new expense
    public function create()
    {
        $categories = config('global.categories');
        return view('expenses.create', [
            'categories'  => $categories
        ]);
    }

    // Store a newly created expense in storage
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Expense::create($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    // Display the specified expense
    public function show(Expense $expense)
    {
        return view('expenses.show');
    }

    // Show the form for editing the specified expense
    public function edit(Expense $expense)
    {
        $categories = config('global.categories');
        return view('expenses.edit', compact('expense', 'categories'));
    }

    // Update the specified expense in storage
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    // Remove the specified expense from storage
    public function destroy(Expense $expense)
    {
        Log::info("ExpenseController destroy", [$expense]);
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }    
}
