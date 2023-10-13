<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_ids = User::pluck('id');

        return [
            'user_id' => $user_ids->random(),
            'section' => fake()->word(),
            'grade' => fake()->randomNumber(2,2),
            'is_ambassador' => fake()->boolean(),
        ];

    }
}
