@extends('layout')

@section('title', 'Edit Student')

@section('content')
    <h2 class="text-2xl font-bold text-emerald-800 mb-6">Edit Student Profile</h2>
    <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
            <input type="text" value="John Doe" class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
            <input type="email" value="john.doe@email.com" class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Course</label>
            <input type="text" value="BS Architecture" class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Year Level</label>
            <select class="w-full border-emerald-100 border-2 rounded-lg p-2.5 focus:border-emerald-500 outline-none bg-white">
                <option>1st Year</option>
                <option>2nd Year</option>
                <option selected>3rd Year</option>
                <option>4th Year</option>
            </select>
        </div>
        <div class="md:col-span-2 space-x-3 mt-4 border-t border-emerald-50 pt-6">
            <button type="button" class="bg-emerald-600 text-white px-8 py-2.5 rounded-lg hover:bg-emerald-700 transition font-medium">Update Record</button>
            <a href="/students" class="bg-slate-100 text-slate-600 px-8 py-2.5 rounded-lg hover:bg-slate-200 transition font-medium">Cancel</a>
        </div>
    </form>
@stop