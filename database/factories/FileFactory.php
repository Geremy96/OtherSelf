<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Files>
 */
class FileFactory extends Factory
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
            'student_id'=> $user_ids->random(),
            'medical_history'=> fake()->paragraph(),
            'social_profile'=> fake()->paragraph(),
            'personality'=> fake()->words(5, true),
            'family_history'=> fake()->paragraph(),
            'mental_test'=> fake()->paragraph(),
            'diagnostic'=> fake()->paragraph(),
        ];
    }
}
