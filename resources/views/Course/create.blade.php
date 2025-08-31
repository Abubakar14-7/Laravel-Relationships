@extends('admin.layouts.master')
@section('admin')
<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <style>
        body { font-family: Arial, sans-serif; background:#eef2f3; padding:30px; }
        h2 { text-align:center; }
        form {
            max-width:500px; margin:auto; background:white; padding:20px;
            border-radius:8px; box-shadow:0px 0px 10px rgba(0,0,0,0.1);
        }
        label { display:block; margin-top:10px; font-weight:bold; }
        input, textarea {
            width:100%; padding:8px; margin-top:5px; border:1px solid #ccc;
            border-radius:4px; font-size:14px;
        }
        button {
            margin-top:15px; padding:10px 15px; background:#4CAF50; color:white;
            border:none; border-radius:4px; cursor:pointer;
        }
        .error { color:red; font-size:14px; }
    </style>
</head>
<body>

<h2>Add Course</h2>

<form action="{{ route('course.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    @error('description') <div class="error">{{ $message }}</div> @enderror

    <label>Duration:</label>
    <input type="text" name="duration" value="{{ old('duration') }}">
    @error('duration') <div class="error">{{ $message }}</div> @enderror

    <label>Fee:</label>
    <input type="text" name="fee" value="{{ old('fee') }}">
    @error('fee') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Save</button>
</form>

</body>
</html>
@endsection
