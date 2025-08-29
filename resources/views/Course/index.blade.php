<!DOCTYPE html>
<html>
<head>
    <title>Courses List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        .btn {
            padding: 8px 15px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
            display: inline-block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background: #4CAF50;
            color: white;
        }
        .action-btn {
            padding: 5px 10px;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }
        .edit { background: #2196F3; }
        .delete { background: #f44336; }
    </style>
</head>
<body>

<h2>Courses List</h2>

<a href="{{ route('course.create') }}" class="btn">Add New Course</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Duration</th>
        <th>Fee</th>
        <th>Actions</th>
    </tr>
    @foreach($courses as $course)
    <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->name }}</td>
        <td>{{ $course->description }}</td>
        <td>{{ $course->duration }}</td>
        <td>{{ $course->fee }}</td>
        <td>
            <a href="{{ route('course.edit', $course->id) }}" class="action-btn edit">Edit</a>
            <a href="{{ route('course.delete', $course->id) }}" class="action-btn delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
