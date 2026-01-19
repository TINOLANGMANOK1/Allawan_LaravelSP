@extends('layout')

@section('content')
    <h2>Add New Student</h2>
    <div class="card p-4 shadow-sm">
        <form>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Save Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection