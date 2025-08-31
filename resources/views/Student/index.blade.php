<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        table th {
            background: #eee;
        }
        a.btn {
            padding: 6px 12px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        a.btn-warning {
            background: #ffc107;
        }
        button.btn-danger {
            background: #dc3545;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .no-data {
            text-align: center;
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="top-bar">
        <h2>Student List</h2>
        <a href="{{route('student.create')}}" class="btn">+ Add Student</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
<tbody>
    @forelse($students as $index => $student)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email ?? '—' }}</td>
        <td>{{ $student->phone ?? '—' }}</td>
        <td>
            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-warning">Delete</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="no-data">No students found.</td>
    </tr>
    @endforelse
</tbody>

    </table>
</div>

</body>
</html>
