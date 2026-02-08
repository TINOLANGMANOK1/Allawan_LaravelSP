@extends('layout')

@section('title', 'Welcome')

@section('content')
    <div class="max-w-2xl">
        <h2 class="text-3xl font-bold text-emerald-800 mb-4">Welcome to the Student Portal</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">
            Manage your academic community with ease. This system allows you to track student names, 
            <span class="font-semibold text-emerald-600">contact emails</span>, and enrollment details in one minimalist dashboard.
        </p>
        <a href="/students" class="inline-block bg-emerald-600 text-white px-8 py-3 rounded-full font-medium hover:bg-emerald-700 transition shadow-lg shadow-emerald-200">
            View Student List
        </a>
    </div>
@stop