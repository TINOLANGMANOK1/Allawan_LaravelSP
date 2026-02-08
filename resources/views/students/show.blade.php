@extends('layout')

@section('title', 'Student Profile')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Student Profile</h2>
    <div class="space-y-4 border-l-4 border-blue-500 pl-4">
        <p><strong>Name:</strong> John Doe</p>
        <p><strong>Email:</strong> john.doe@example.com</p>
        <p><strong>Course:</strong> BS Information Technology</p>
        <p><strong>Year Level:</strong> 3rd Year</p>
    </div>
    
    <div class="mt-6">
        <a href="/students" class="text-blue-600 hover:underline">← Back to Student List</a>
    </div>
@stop