<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
        ]);

        // Student::factory(15)->create();
        // Classroom::factory(10)->create();
        Classroom::factory(10)
        ->hasStudents(15)
        ->create();

        Subject::factory(10)
        ->hasTeacher(1)
        ->create();
    }
}
