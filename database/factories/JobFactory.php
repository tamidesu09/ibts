<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->sentence($nbWords = 100, $variableNbWords = true),
            'type' => fake()->randomElement($array = array('Full-time','Part-time','Contractual')),
            'hours_start' => "09:00:00",
            'hours_end' => "17:00:00"
        ];
    }
}
