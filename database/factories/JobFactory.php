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

        $requirements = [
            // Math & Physics (15 skills)
            'Calculus',
            'Linear Algebra',
            'Differential Equations',
            'Mathematical Modelling',
            'Number Theory',
            'Probability',
            'Statistics',
            'Statistical Analysis',
            'Data Mining',
            'Regression Analysis',
            'Time Series Analysis',
            'Discrete Mathematics',
            'Combinatorics',
            'Game Theory',
            'Quantum Physics',

            // Programming (20 skills)
            'Machine Learning',
            'Artificial Intelligence',
            'Deep Learning',
            'Natural Language Processing',
            'Data Structures',
            'Algorithms',
            'Python Programming',
            'JavaScript',
            'Java',
            'C++',
            'Ruby',
            'SQL',
            'PHP',
            'R Programming',
            'C Programming',
            'Swift',
            'Kotlin',
            'HTML/CSS',
            'React',
            'Angular',
            'Node.js'
        ];
        $selectedRequirements = $this->faker->randomElements($requirements, $count = rand(4, 8));

        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->sentence($nbWords = 100, $variableNbWords = true),
            'type' => fake()->randomElement($array = array('Full-time', 'Part-time', 'Contractual')),
            'hours_start' => "09:00:00",
            'hours_end' => "17:00:00",
            'requirements' => json_encode($selectedRequirements)
        ];
    }
}
