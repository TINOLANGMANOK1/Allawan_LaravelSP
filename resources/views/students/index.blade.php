@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student List</h2>
        <x-button :href="route('students.create')" type="success">Add New Student</x-button>
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
                <td>John Doe</td>
                <td>BSIT</td>
                <td>3rd Year</td>
                <td>
        
                    <x-button :href="route('students.show')" type="view">View</x-button>
                    <x-button :href="route('students.edit')" type="edit">Edit</x-button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection