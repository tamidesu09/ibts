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
        \App\Models\User::factory(2500)->create();
        \App\Models\User::create([
            'name' => 'Marcus',
            'email' => 'user@example.com',
            'password' => 'password',
            'email_verified_at' => now()
        ]);
     
    }
}
