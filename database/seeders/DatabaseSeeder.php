<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     JobCategorySeeder::class, // ✅ Added
        //     JobSeeder::class, // ✅ Added
        // ]);
        
    $this->call(CourseSeeder::class);
    $this->call(StudentSeeder::class);
    


    }
}
