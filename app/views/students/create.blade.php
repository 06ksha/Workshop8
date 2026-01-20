@extends('layouts.master')
@section('content')
    <h2>Add Student</h2>
    <form action="index.php?action=store" method="POST">
        <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="text" name="course" placeholder="Course" class="form-control mb-2" required>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
@endsection