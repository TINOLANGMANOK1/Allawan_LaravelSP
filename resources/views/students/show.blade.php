@extends('layout')

@section('content')
    <h2>Student Profile</h2>
    <div class="card shadow-sm mt-3">
        <div class="card-body">
            <p><strong>Name:</strong> James Reino A. Allawan</p>
            <p><strong>Email:</strong> jallawan@example.com</p>
            <p><strong>Course:</strong> BSIT</p>
            <p><strong>Year Level:</strong> 3rd Year</p>
            <hr>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
@endsection