<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'first_name' => 'Admin',
            'last_name' => 'Users',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'users_id' => 'PH202511100001',
            'birthday' => '1990-01-01',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            Users::create([
                'first_name' => 'Test',
                'last_name' => 'User ' . $i,
                'email' => 'test' . $i . '@example.com',
                'password' => Hash::make('secret'),
                'users_id' => (string) Str::uuid(),
                'birthday' => '1995-0' . $i . '-15',
            ]);
        }
    }
}
