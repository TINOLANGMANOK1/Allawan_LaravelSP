@extends('layout')

@section('title', 'Student List')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-emerald-900">Student Directory</h2>
        <x-action-button href="/students/create" color="emerald">Add New Student</x-action-button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="text-emerald-700 border-b border-emerald-100">
                    <th class="pb-4 font-semibold text-sm uppercase tracking-wider">Name</th>
                    <th class="pb-4 font-semibold text-sm uppercase tracking-wider">Email</th>
                    <th class="pb-4 font-semibold text-sm uppercase tracking-wider">Course</th>
                    <th class="pb-4 font-semibold text-sm uppercase tracking-wider">Year</th>
                    <th class="pb-4 font-semibold text-sm uppercase tracking-wider text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-emerald-50">
    @foreach($students as $student)
    <tr class="hover:bg-emerald-50/50 transition">
        <td class="py-4 font-medium text-slate-900">{{ $student->name }}</td>
        <td class="py-4 text-slate-500">{{ $student->email }}</td>
        <td class="py-4">{{ $student->course }}</td>
        <td class="py-4 text-sm">{{ $student->year_level }}</td>
        <td class="py-4 text-right space-x-1">
            <x-action-button href="/students/{{ $student->id }}">View</x-action-button>
            <x-action-button href="/students/{{ $student->id }}/edit">Edit</x-action-button>
        </td>
    </tr>
    @endforeach
</tbody>
        </table>
    </div>
@stop