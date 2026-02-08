@extends('layout')

@section('title', 'Add Student')

@section('content')
    <h2 class="text-2xl font-bold text-emerald-800 mb-6">Add New Student</h2>
    <form action="/students" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
        <input type="text" name="name" required class="w-full border-emerald-100 border-2 rounded-lg p-2.5 ...">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
        <input type="email" name="email" required class="w-full border-emerald-100 border-2 rounded-lg p-2.5 ...">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Course</label>
        <input type="text" name="course" required class="w-full border-emerald-100 border-2 rounded-lg p-2.5 ...">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Year Level</label>
        <select name="year_level" class="w-full border-emerald-100 border-2 rounded-lg p-2.5 ...">
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
    </div>
    <div class="md:col-span-2 space-x-3 mt-4">
        <button type="submit" class="bg-emerald-600 text-white px-8 py-2.5 ...">Save Record</button>
    </div>
</form>
@stop