<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Job;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applications>
 */
class ApplicationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $job = Job::inRandomOrder()->first();

        $skills = [
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

        $selectedSkills = $this->faker->randomElements($skills, $count = rand(3, 5));


        return [
            'complete_name' => $user->name,
            'email' => $user->email,
            'sex' => fake()->randomElement($array = array('Male', 'Female', 'Prefer not to say')),
            'cv_path' => $this->faker->filePath,
            'user_id' => $user->id,
            'job_id' => $job->id,
            'is_parsed' => fake()->randomElement($array = array(1)),
            'status' => fake()->randomElement($array = array('Application Received', 'Screen', 'Under Review', 'Interview Schedule', 'Offer')),
            'skills' => json_encode($selectedSkills),
        ];
    }
}
