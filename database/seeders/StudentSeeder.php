<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Fetch all courses
        $courses = Course::all();

        $students = [
            [
                'name' => 'Ali Khan',
                'email' => 'ali@example.com',
                'phone' => '03001234567',
                'course_id' => $courses[0]->id ?? 1, // Assign to first course
            ],
            [
                'name' => 'Sara Ahmed',
                'email' => 'sara@example.com',
                'phone' => '03111234567',
                'course_id' => $courses[0]->id ?? 1,
            ],
            [
                'name' => 'Ahmed Raza',
                'email' => 'ahmed@example.com',
                'phone' => '03211234567',
                'course_id' => $courses[1]->id ?? 2, // Assign to second course
            ],
            [
                'name' => 'Fatima Noor',
                'email' => 'fatima@example.com',
                'phone' => '03331234567',
                'course_id' => $courses[1]->id ?? 2,
            ],
            [
                'name' => 'Bilal Hussain',
                'email' => 'bilal@example.com',
                'phone' => '03451234567',
                'course_id' => $courses[2]->id ?? 3, // Assign to third course
            ],
        ];

        Student::insert($students);
    }
}
