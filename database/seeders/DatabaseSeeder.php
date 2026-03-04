<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => env('SEEDER_USER_NAME'),
            'email' => env('SEEDER_USER_EMAIL'),
            'password' => env('SEEDER_USER_PASSWORD'),
            'role' => env('SEEDER_USER_ROLE'),
        ]);
    }
}
