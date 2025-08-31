<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobCategory::create([
            'name' => 'Information Technology',
            'description' => 'Jobs related to IT and Software Development.',
        ]);

        JobCategory::create([
            'name' => 'Healthcare',
            'description' => 'Jobs in hospitals, clinics, and medical research.',
        ]);

        JobCategory::create([
            'name' => 'Education',
            'description' => 'Teaching, training, and academic jobs.',
        ]);

        JobCategory::create([
            'name' => 'Engineering',
            'description' => 'Civil, Mechanical, and Electrical Engineering jobs.',
        ]);

        JobCategory::create([
            'name' => 'Finance',
            'description' => 'Banking, accounting, and investment jobs.',
        ]);
    }
}
