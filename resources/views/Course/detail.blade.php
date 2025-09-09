<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course & Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .table th {
            background: #007bff;
            color: #fff;
        }

        .btn-custom {
            border-radius: 25px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        {{-- Section 1: Course Details --}}
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="section-title">📘 Course Details</h4>
                <p><strong>Course Name:</strong> {{ $course->name }}</p>
                <p><strong>Description:</strong> {{ $course->description }}</p>
                <p><strong>Duration:</strong> {{ $course->duration }}</p>
                <p><strong>Fee:</strong> $ {{ $course->fee }}</p>
            </div>
        </div>

        {{-- Section 2: Student Registration Form --}}
        <div class="card mb-4">
            <div class="card-body">
                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h4 class="section-title">📝 Register a New Student</h4>
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter Name">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter Email">
                        </div>
                        <div class="col-md-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" id="phone" name="phone" class="form-control"
                                placeholder="Enter Phone">
                        </div>
                        <div class="col-md-1 text-end">
                            <button type="submit" class="btn btn-primary btn-custom w-100">+</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Section 3: Student List --}}
        <div class="card">
            <div class="card-body">
                <h4 class="section-title">👨‍🎓 Student List</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->created_at }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>
