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
        \App\Models\User::factory()->create([
            'username' => 'testuser1',
            'password' => \Hash::make('Test123!'),
        ]);
        \App\Models\User::factory()->create([
            'username' => 'testuser2',
            'password' => \Hash::make('Test123!'),
        ]);

        // seed multiple notes
        \App\Models\Note::factory()->count(10)->create([
            'user_id' => 1,
        ]);

        // seed multiple notes
        \App\Models\Note::factory()->count(10)->create([
            'user_id' => 2,
        ]);

    }
}
