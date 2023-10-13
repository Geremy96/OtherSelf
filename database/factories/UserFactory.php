<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $institution_ids = Institution::pluck('id');

        return [
            'firstname' => fake()->word(),
            'lastname' => fake()->word(),
            'age' => fake()->numberBetween(18,100),
            'email' => fake()->safeEmail(),
            'phonenumber' => fake()->phoneNumber(),
            'password' => 'password',
            'is_admin' => fake()->boolean(),
            'institution_id' => $institution_ids->random(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
