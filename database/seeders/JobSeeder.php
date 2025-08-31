<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Develop and maintain web applications.',
            'location' => 'Lahore',
            'salary' => 80000,
        ]);

        Job::create([
            'title' => 'Project Manager',
            'description' => 'Oversee IT projects and ensure timely delivery.',
            'location' => 'Karachi',
            'salary' => 120000,
        ]);

        Job::create([
            'title' => 'Accountant',
            'description' => 'Handle financial records and audits.',
            'location' => 'Islamabad',
            'salary' => 60000,
        ]);
    }
}
