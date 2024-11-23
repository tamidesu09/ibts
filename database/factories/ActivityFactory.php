<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'title' => fake()->sentence($nbWords = 1, $variableNbWords = true),
            'type' => fake()->randomElement($array = array('Call','Meeting','Email','Interview')),
            'date' => now(),
            'hours_start' => "07:00:00",
            'hours_end' => "12:00:00",
            'user_id' => $user->id,
            'description' => fake()->sentence($nbWords = 20, $variableNbWords = true),




        ];
    }
}
