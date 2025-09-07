@extends('admin.layouts.master')
@section('admin')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Student</title>
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
                background: #007bff;
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
        </style>
    </head>

    <body>

        <div class="form-container">
            <h2>Edit Student</h2>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf

                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name', $student->name) }}">

                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email', $student->email) }}">

                <label>Phone:</label>
                <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">


                <div>
                    <label>Select Course:</label>
                    <select name="course_id" id="course_id">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" {{  $course->id == $student->course_id ? 'selected' : '' }} >{{ $course->name }}</option>
                        @endforeach
                    </select>

                </div>
                <button type="submit" class="btn">Update</button>
                <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>

    </body>

    </html>
@endsection
