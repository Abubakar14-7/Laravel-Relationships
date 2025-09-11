<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class CourseController extends Controller
{
    public function index()
    {

        $courses = Course::all();
        return view('Course.index', compact('courses'));
    }

    public function create()
    {

        return view('Course.create');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'fee' => 'nullable|numeric|min:0',
        ], [
            'name.required' => 'Please enter the course name.',
            'name.string' => 'Course name must be text only.',
            'name.max' => 'Course name must not be more than 255 characters.',

            'description.string' => 'Description must be text.',

            'duration.string' => 'Duration must be text.',
            'duration.max' => 'Duration must not be more than 100 characters.',

            'fee.numeric' => 'Fee must be a number.',
            'fee.min' => 'Fee cannot be negative.',
        ]);

        $courses = new Course();

        $courses->name = $request->name;
        $courses->description = $request->description;
        $courses->duration = $request->duration;
        $courses->fee = $request->fee;

        $courses->save();
        return redirect()->route('course.index');
    }

    public function edit($id)
    {

        $courses = Course::find($id);
        return view('Course.edit', compact('courses'));
    }

    public function detail($id)
    {

        $course = Course::find($id);
        $students = Student::where('course_id', $id)->get();
        return view('Course.detail', compact('course', 'students'));
    }

    public function update(Request $request, $id)
    {

        $request->validate(
            [

                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'duration' => 'nullable|string|max:100',
                'fee' => 'nullable|numeric|min:0',
            ],
            [
                'name.required' => 'Please enter the course name.',
                'name.string' => 'Course name must be text only.',
                'name.max' => 'Course name must not be more than 255 characters.',

                'description.string' => 'Description must be text.',

                'duration.string' => 'Duration must be text.',
                'duration.max' => 'Duration must not be more than 100 characters.',

                'fee.numeric' => 'Fee must be a number.',
                'fee.min' => 'Fee cannot be negative.',
            ]
        );

        $courses = Course::find($id);

        $courses->name = $request->name;
        $courses->description = $request->description;
        $courses->duration = $request->duration;
        $courses->fee = $request->fee;

        $courses->save();
        return redirect()->route('course.index');
    }

    public function delete($id)
    {

        $courses = Course::find($id);
        $courses->delete();
        return redirect()->route('course.index');
    }

    public function agechecker($age)
    {
        return "Welcome! Your age is $age";
    }

    public function blockuser()
    {
        return view('user-blocked');
    }
}
