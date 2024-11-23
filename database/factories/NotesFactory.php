<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applications;
use App\Models\User;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $application = Applications::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();


        return [
            'name' => $user->name,
            'content' => fake()->sentence($nbWords = 30, $variableNbWords = true),
            'application_id' => $application->id
        ];
    }
}
