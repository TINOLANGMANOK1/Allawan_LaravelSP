@extends('layout')

@section('content')
    <h2>Edit Student</h2>
    <div class="card p-4 shadow-sm">
        <form>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="John Doe">
            </div>
            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" class="form-control" value="BSIT">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection