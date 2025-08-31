@extends('admin.layouts.master')
@section('admin')
<!DOCTYPE html>
<html>
<head>
    <title>Add Job</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { margin-bottom: 20px; }
        form { max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input, textarea {
            width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;
        }
        button {
            margin-top: 15px; padding: 8px 12px; border: none;
            background: #28a745; color: white; border-radius: 4px; cursor: pointer;
        }
        a { display: inline-block; margin-top: 10px; color: #007bff; }
    </style>
</head>
<body>
    <h1>Add New Job</h1>
    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <label>Location:</label>
        <input type="text" name="location">

        <label>Salary:</label>
        <input type="number" name="salary" step="0.01">

        <button type="submit">Save</button>
    </form>
    <a href="{{ route('jobs.index') }}">← Back to List</a>
</body>
</html>
@endsection
