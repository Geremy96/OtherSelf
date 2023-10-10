<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Psychologist>
 */
class PsychologistFactory extends Factory
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
            'identification_number' => fake()->word(),
            'stamp' => fake()->uuid(),
            'certificate_university'  =>fake()->uuid(),
            'user_id' => $user_ids->random(),
        ];
    }
}
