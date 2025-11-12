<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Static User: Use firstOrCreate for guaranteed uniqueness
        Users::firstOrCreate(
            // Check for existence based on this unique attribute
            ['email' => 'admin@email.com'],
            // If not found, create the record with these attributes
            [
                'first_name' => 'Admin',
                'last_name' => 'Users',
                'password' => Hash::make('password'),
                'users_id' => 'PH202511100001',
                'birthday' => '1990-01-01',
            ]
        );

        // 2. Test Users: Check if they already exist before seeding the loop
        if (Users::where('email', 'like', 'test%@example.com')->count() < 5) {
            for ($i = 1; $i <= 5; $i++) {
                Users::firstOrCreate(
                    // Check for existence based on the unique email
                    ['email' => 'test' . $i . '@example.com'],
                    // If not found, create the record with these attributes
                    [
                        'first_name' => 'Test',
                        'last_name' => 'User ' . $i,
                        'password' => Hash::make('secret'),
                        'users_id' => (string) Str::uuid(),
                        'birthday' => '1995-0' . $i . '-15',
                    ]
                );
            }
        }
    }
}
