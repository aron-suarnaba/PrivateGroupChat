<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Define the correct, existing User ID
        $adminUserId = 'PH202511100001';

        // 2. Simple existence check to avoid duplication if running db:seed multiple times
        if (DB::table('messages')->count() === 0) {

            DB::table('messages')->insert([
                // Message 1: From Admin (correct ID) to Group 1
                [
                    'group_id' => 1,
                    'users_id' => $adminUserId, // 🚨 CORRECTED USER ID
                    'content' => 'Hello team! Welcome to the General Discussion Group.',
                    'is_read' => false,
                    'send_on' => Carbon::now()->subMinutes(5), // Seed data with slightly different times
                    'created_at' => Carbon::now()->subMinutes(5),
                    'updated_at' => Carbon::now()->subMinutes(5),
                ],
            ]);
        }
    }
}
