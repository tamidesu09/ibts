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

        \App\Models\User::create([
            'name' => 'Jaleel Nicole De Guzman',
            'email' => 'mjndeguzman.ibts@tip.edu.ph',
            'password' => 'password',
            'dob' => '2001-11-19',
            'email_verified_at' => now(),
            'user_type' => 0,
        ]);

        \App\Models\User::create([
            'name' => 'Jenny Mae Araneta',
            'email' => 'mjmaraneta.ibts@tip.edu.ph',
            'password' => 'password',
            'dob' => '2003-01-01',
            'email_verified_at' => now(),
            'user_type' => 0,
        ]);

        \App\Models\User::create([
            'name' => 'Liam Jed Flores',
            'email' => 'mljflores.ibts@tip.edu.ph',
            'password' => 'password',
            'dob' => '2003-08-09',
            'email_verified_at' => now(),
            'user_type' => 0,
        ]);

        \App\Models\User::create([
            'name' => 'Jenelyn Aranas',
            'email' => 'jaranas.ibts@tip.edu.ph',
            'password' => 'password',
            'dob' => '2003-01-01',
            'email_verified_at' => now(),
            'user_type' => 0,
        ]);

        \App\Models\User::create([
            'name' => 'iBear HR',
            'email' => 'ibts.recruitmint@gmail.com',
            'password' => 'password',
            'dob' => '2003-01-01',
            'email_verified_at' => now(),
            'user_type' => 0,
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Job::factory(6)->create();
        \App\Models\Applications::factory(10)->create();
        \App\Models\Feedback::factory(10)->create();
        \App\Models\Notes::factory()->create();
        \App\Models\Activity::factory(50)->create();
    }
}
