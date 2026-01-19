@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <h1>Welcome to the Student Portal</h1>
        <p>This page is inheriting the Navbar from layout.blade.php!</p>
        <x-button :href="route('students.index')">View Students</x-button>
    </div>
@endsection