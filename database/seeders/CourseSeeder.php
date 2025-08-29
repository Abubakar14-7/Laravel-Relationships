<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $courses = [
            [
                'name' => 'Web Development',
                'description' => 'Learn HTML, CSS, JavaScript, and PHP for building websites.',
                'duration' => '3 Months',
                'fee' => 15000,
            ],
            [
                'name' => 'Graphic Designing',
                'description' => 'Master Photoshop, Illustrator, and design principles.',
                'duration' => '2 Months',
                'fee' => 12000,
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Build Android and iOS apps using Flutter.',
                'duration' => '4 Months',
                'fee' => 20000,
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'SEO, Social Media Marketing, and Google Ads.',
                'duration' => '1.5 Months',
                'fee' => 10000,
            ],
            [
                'name' => 'Data Science',
                'description' => 'Python, Pandas, Machine Learning basics.',
                'duration' => '5 Months',
                'fee' => 25000,
            ],
        ];

        Course::insert($courses);
    }
}
