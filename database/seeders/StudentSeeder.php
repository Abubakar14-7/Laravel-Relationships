<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{

    public function run(): void
    {
        $students = [
            [
                'name' => 'Ali Khan',
                'email' => 'ali@example.com',
                'phone' => '03001234567',
            ],
            [
                'name' => 'Sara Ahmed',
                'email' => 'sara@example.com',
                'phone' => '03111234567',
            ],
            [
                'name' => 'Ahmed Raza',
                'email' => 'ahmed@example.com',
                'phone' => '03211234567',
            ],
            [
                'name' => 'Fatima Noor',
                'email' => 'fatima@example.com',
                'phone' => '03331234567',
            ],
            [
                'name' => 'Bilal Hussain',
                'email' => 'bilal@example.com',
                'phone' => '03451234567',
            ],
        ];

        Student::insert($students);
    
    }
}
