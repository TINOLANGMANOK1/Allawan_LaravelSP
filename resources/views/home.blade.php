@extends('layout')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <h1>Welcome to the Student Portal</h1>
        <p class="lead">This system allows you to manage student records, view profiles, and update academic information efficiently.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">View Student List</a>
    </div>
@endsection