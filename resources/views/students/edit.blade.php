@extends('layout')
@section('title', 'Edit Student')
@section('content')
<h2 class="text-2xl font-bold text-emerald-800 mb-6">Edit Student Profile</h2>

<form action="/students/{{ $student->id }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf
    @method('PUT') {{-- This is required for updates --}}

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
        <input type="text" name="name" value="{{ $student->name }}"
            class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
        <input type="email" name="email" value="{{ $student->email }}"
            class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Course</label>
        <input type="text" name="course" value="{{ $student->course }}"
            class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
    </div>
    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Year Level</label>
        <select name="year_level"
            class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none bg-white">
            <option value="1st Year" {{ $student->year_level == '1st Year' ? 'selected' : '' }}>1st Year</option>
            <option value="2nd Year" {{ $student->year_level == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
            <option value="3rd Year" {{ $student->year_level == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
            <option value="4th Year" {{ $student->year_level == '4th Year' ? 'selected' : '' }}>4th Year</option>
        </select>
    </div>
    <div class="md:col-span-2 space-x-3 mt-4 border-t border-emerald-50 pt-6">
        <button type="submit"
            class="bg-emerald-600 text-white px-8 py-2.5 rounded-lg hover:bg-emerald-700 transition font-medium">Update
            Record</button>
        <a href="/students"
            class="bg-slate-100 text-slate-600 px-8 py-2.5 rounded-lg hover:bg-slate-200 transition font-medium">Cancel</a>
    </div>
</form>
@stop