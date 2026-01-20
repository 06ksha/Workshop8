@extends('layouts.master')

@section('content')
    <h2>Student List</h2>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Add Student</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['course'] }}</td>
                    <td>
                        <a href="index.php?action=edit&id={{ $student['id'] }}" class="btn btn-edit">Edit</a>
                        
                        <a href="index.php?action=delete&id={{ $student['id'] }}" 
                           class="btn btn-delete" 
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection