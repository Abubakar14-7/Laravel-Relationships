<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();
        return view('Student.index', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('Student.create', compact('courses'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [

                'name' => 'required|string|max:30',
                'email' => 'nullable|email',
                'phone' => 'nullable|numeric',
            ],
            [
                'name.required' => 'Please enter the student name.',
                'name.string'   => 'Student name must be a valid string.',
                'name.max'      => 'Student name should not be more than 30 characters.',

                'email.email'   => 'Please enter a valid email address.',

                'phone.numeric'  => 'Phone number must be in numbers.',
            ]

        );

        $students = new Student();

        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->course_id = $request->course_id;

        $students->save();
        return redirect()->route('student.index');
    }

    public function edit($id)
    {

        $students = Student::find($id);
        return view('Student.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {

        $request->validate(
            [

                'name' => 'required|string|max:30',
                'email' => 'nullable|email',
                'phone' => 'nullable|numeric',
            ],
            [
                'name.required' => 'Please enter the student name.',
                'name.string'   => 'Student name must be a valid string.',
                'name.max'      => 'Student name should not be more than 30 characters.',

                'email.email'   => 'Please enter a valid email address.',

                'phone.numeric'  => 'Phone number must be in numbers.',
            ]
        );

        $students = Student::find($id);

        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;

        $students->save();
        return redirect()->route('student.index');
    }

    public function delete($id)
    {

        $students = Student::find($id);
        $students->delete();
        return redirect()->route('student.index');
    }
}
