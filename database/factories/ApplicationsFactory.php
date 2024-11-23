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

        return [
            'complete_name' => $user->name,
            'email' => $user->email,
            'sex' => fake()->randomElement($array = array('Male', 'Female', 'Prefer not to say')),
            'cv_path' => $this->faker->filePath,
            'user_id' => $user->id,
            'job_id' => $job->id,
            'is_parsed' => fake()->randomElement($array = array(0, 1)),
            'status' => fake()->randomElement($array = array('Application Received','Screen','Under Review','Interview Schedule','Offer'))
        ];
    }
}
