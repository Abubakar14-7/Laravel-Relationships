@extends('admin.layouts.master')
@section('admin')
<!DOCTYPE html>
<html>
<head>
    <title>Jobs</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { margin-bottom: 20px; }
        a.button {
            padding: 8px 12px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 10px; text-align: left; }
        th { background: #f4f4f4; }
        .actions form { display: inline; }
        .btn { padding: 6px 10px; border: none; cursor: pointer; border-radius: 4px; }
        .btn-edit { background: #007bff; color: white; }
        .btn-delete { background: #dc3545; color: white; }
    </style>
</head>
<body>
    <h1>Job List</h1>
    <a href="{{ route('jobs.create') }}" class="button">+ Add New Job</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Location</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
            <td>{{ $job->id }}</td>
            <td>{{ $job->title }}</td>
            <td>{{ $job->description }}</td>
            <td>{{ $job->location }}</td>
            <td>{{ $job->salary }}</td>
            <td class="actions">
                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
