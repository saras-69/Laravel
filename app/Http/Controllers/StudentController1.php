<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController1 extends Controller
{
    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        return view('create_student');
    }

    /**
     * Store a newly created student in the database.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'course' => 'required|string|max:255',
        ]);

        // Create the student record
        Student::create($validated);

        // Redirect with success message
        return redirect()->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    /**
     * Display a listing of students.
     */
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }
}