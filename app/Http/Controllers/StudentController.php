<?php

namespace App\Http\Controllers;

use App\Models\Student; // Import the Student model
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $students = Student::all();
            return DataTables::of($students)
                ->addColumn('action', function ($student) {
                    return '
                        <a href="' . route('students.edit', $student->id) . '" class="btn btn-warning btn-sm">Edit</a>
                        <form action="' . route('students.destroy', $student->id) . '" method="POST" style="display:inline;">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    ';
                })
                ->make(true);
        } else {
            $students = Student::select('*')->get();
            return view('students.index', ['students' => $students]);
        }
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'math_grade' => 'required|integer|between:0,100',
            'science_grade' => 'required|integer|between:0,100',
            'english_grade' => 'required|integer|between:0,100',
            'spanish_grade' => 'required|integer|between:0,100',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Display the specified student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update the specified student in storage
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'math_grade' => 'required|integer|between:0,100',
            'science_grade' => 'required|integer|between:0,100',
            'english_grade' => 'required|integer|between:0,100',
            'spanish_grade' => 'required|integer|between:0,100',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from storage
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
