<?php

namespace Database\Factories;

use App\Models\Classrooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classrooms>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->unique()->randomElement([
                '10 PPLG 1',
                '10 PPLG 2',
                '11 PPLG 1',
                '11 PPLG 2',
                '12 PPLG 1',
                '10 ANIMASI 1',
                '11 ANIMASI 1',
                '12 ANIMASI 1',
                '10 DKV 1',
                '11 DKV 1',]),
            'major'=> fake()->randomElement(['PPLG','ANIMASI','DKV'])
        ];
    }
}
