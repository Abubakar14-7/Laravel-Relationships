@extends('admin.layouts.master')
@section('admin')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Add Student</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f7f7f7;
                padding: 20px;
            }

            .form-container {
                max-width: 500px;
                margin: auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
            }

            label {
                display: block;
                margin-top: 10px;
                font-weight: bold;
            }

            input {
                width: 100%;
                padding: 8px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .btn {
                display: inline-block;
                padding: 8px 14px;
                margin-top: 15px;
                background: #28a745;
                color: white;
                border-radius: 4px;
                text-decoration: none;
                border: none;
                cursor: pointer;
            }

            .btn-secondary {
                background: #6c757d;
            }

            .error {
                color: red;
                font-size: 14px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
            }

            table th,
            table td {
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

        <div class="form-container">
            <h2>Add Student</h2>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}">

                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">

                <label>Phone:</label>
                <input type="number" name="phone" value="{{ old('phone') }}">

                <div class="div">
                    <label for="course_id"> Select Course</label>
                    <select name="course_id" id="course_id">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn">Save</button>
                <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>



        <div class="container">
            <div class="top-bar">
                <h2>Student List</h2>
                <a href="{{ route('student.create') }}" class="btn">+ Add Student</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Fee</th>
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
                            <td>{{ $student->course->name }}</td>
                            <td>{{ $student->course->fee ?? '—' }}</td>
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
@endsection
