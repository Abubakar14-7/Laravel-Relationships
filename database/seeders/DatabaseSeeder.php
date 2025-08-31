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
<<<<<<< HEAD
        $this->call([
            JobCategorySeeder::class, // ✅ Added
            JobSeeder::class, // ✅ Added
        ]);
=======
        
    $this->call(StudentSeeder::class);
    $this->call(CourseSeeder::class);


>>>>>>> 66f5c982ef3f96938e822563be7253c98d37fa23
    }
}
