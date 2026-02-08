@extends('layout')
@section('title', 'Student Profile')
@section('content')
    <h2 class="text-2xl font-bold text-emerald-800 mb-6">Student Profile</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-6 border-t border-emerald-50">
        <div>
            <label class="text-xs font-bold uppercase text-emerald-600 tracking-widest">Full Name</label>
            <p class="text-lg text-slate-900 font-medium">{{ $student->name }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-emerald-600 tracking-widest">Email Address</label>
            <p class="text-lg text-slate-900 font-medium">{{ $student->email }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-emerald-600 tracking-widest">Course</label>
            <p class="text-lg text-slate-900 font-medium">{{ $student->course }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-emerald-600 tracking-widest">Year Level</label>
            <p class="text-lg text-slate-900 font-medium">{{ $student->year_level }}</p>
        </div>
    </div>
    <div class="mt-8">
        <a href="/students" class="text-emerald-700 font-medium hover:text-emerald-900">← Back to Student List</a>
    </div>
@stop