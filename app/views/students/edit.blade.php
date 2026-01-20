@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Edit Student</h2>
            <form action="index.php?page=update&id={{ $student['id'] }}" method="POST">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $student['name'] }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $student['email'] }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Course</label>
                    <input type="text" name="course" value="{{ $student['course'] }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Student</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection