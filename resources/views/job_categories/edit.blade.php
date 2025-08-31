@extends('admin.layouts.master')
@section('admin')
<!DOCTYPE html>
<html>
<head>
    <title>Edit Job Category</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; padding: 0; }
        h2 { text-align: center; margin-top: 30px; color: #333; }
        form { width: 40%; margin: 30px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        label { display:block; margin-top:15px; font-weight:bold; }
        input, textarea { width:100%; padding:10px; margin-top:5px; border-radius:4px; border:1px solid #ccc; }
        button { margin-top:20px; padding:10px 20px; background:#007bff; color:white; border:none; border-radius:4px; cursor:pointer; }
        button:hover { opacity:0.9; }
        .back-link { display:inline-block; margin-top:15px; color:#007bff; text-decoration:none; }
        .back-link:hover { opacity:0.8; }
    </style>
</head>
<body>
    <h2>Edit Job Category</h2>
    <form action="{{ route('job_categories.update', $jobCategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $jobCategory->name }}" required>

        <label>Description</label>
        <textarea name="description" rows="4">{{ $jobCategory->description }}</textarea>

        <button type="submit">Update</button>
        <br>
        <a class="back-link" href="{{ route('job_categories.index') }}">← Back to Categories</a>
    </form>
</body>
</html>
@endsection
