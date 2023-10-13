<?php

namespace Database\Factories;

use App\Models\Classification;
use App\Models\Level;
use App\Models\Psychologist;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $psychologist_ids = Psychologist::pluck('id');
        $student_ids = Student::pluck('id');
        $clasification_ids = Classification::pluck('id');
        $level_ids = Level::pluck('id');


        return [
            'date' => fake()->date(),
            'psychologist_id' => $psychologist_ids->random(),
            'student_id' => $student_ids->random(),
            'reason'=> fake()->word(),
            'date_hour'=> fake()->dateTime(),
            'recommendations' => fake()->word(),
            'classification_id'=> $clasification_ids->random(),
            'level_id'=> $level_ids->random(),
            'reference'=> fake()->word(),
            'already_had'=> fake()->boolean(),
            'notes' => fake()->word(),
        ];
    }
}
