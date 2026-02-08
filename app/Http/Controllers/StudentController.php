<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'course' => 'required',
            'year_level' => 'required',
        ]);
        Student::create($data);
        return redirect('/students');
    }

    // FIX FOR VIEW: Find student by ID
    public function show($id) {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    // FIX FOR EDIT: Find student and show the edit form
    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // UPDATE: Save the changes to the database
    public function update(Request $request, $id) {
        $student = Student::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'course' => 'required',
            'year_level' => 'required',
        ]);

        $student->update($data);
        return redirect('/students');
    }
}