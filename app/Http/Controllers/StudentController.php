<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // READ: Display Student List
    public function index() {
        $students = Student::all(); // Fetches all rows from 'students' table
        return view('students.index', compact('students'));
    }

    // CREATE: Show Form
    public function create() {
        return view('students.create');
    }

    // STORE: Save to Database
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        Student::create($data); // Saves to studentportal database
        return redirect('/students');
    }
}
