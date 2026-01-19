@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>James Reino A. Allawan</td>
                <td>BSIT</td>
                <td>3rd Year</td>
                <td>
                    <a href="{{ route('students.show') }}" class="btn btn-sm btn-info text-white">View</a>
                    <a href="{{ route('students.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection