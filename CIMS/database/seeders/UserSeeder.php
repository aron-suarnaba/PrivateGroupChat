<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure you use the correct User model namespace

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create a single administrator user
        User::firstOrCreate(
            [
                'email' => 'admin@example.com',
            ],
            [
                'name' => 'administrator',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Optional: Create 5 fake users using the User Factory
        if (app()->environment('local')) {
            // Check if the User model has a factory defined
            if (method_exists(User::class, 'factory')) {
                User::factory(5)->create();
            }
        }
    }
}
