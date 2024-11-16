<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExpenseController;

Route::redirect('/', '/dashboard');
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Expenses
Route::resource('expenses', ExpenseController::class);
// Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');