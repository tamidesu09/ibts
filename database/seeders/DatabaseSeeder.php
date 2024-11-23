<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => 'password',
            'dob' => '2001-01-01',
            'email_verified_at' => now(),
            'user_type' => 0
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\Job::factory(50)->create();
        \App\Models\Applications::factory(500)->create();
        \App\Models\Feedback::factory(50)->create();
        \App\Models\Notes::factory(50)->create();
        \App\Models\Activity::factory(50)->create();



    }
}
