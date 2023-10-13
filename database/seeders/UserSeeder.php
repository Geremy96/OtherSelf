<?php

namespace Database\Seeders;

use App\Models\Psychologist;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $psychologist_users = \App\Models\User::factory(10)->create();
        $students_users = \App\Models\User::factory(10)->create();

        Psychologist::factory(count($psychologist_users))->sequence(fn ($sqn) => [
            'user_id' => $psychologist_users[$sqn->index]
        ])->create();

        Student::factory(count($students_users))->sequence(fn ($sqn) => [
            'user_id' => $students_users[$sqn->index]
        ])->create();
    }
}
