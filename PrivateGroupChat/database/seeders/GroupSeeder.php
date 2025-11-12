<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        // 🚨 IMPORTANT: Use the actual users_id of the Admin user
        $adminUserId = 'PH202511100001';

        // Use firstOrCreate-like logic to prevent duplication on re-run
        // Note: DB::table('groups')->insert() is simpler, but a check is better.

        // Example using DB facade with a simple existence check:
        if (DB::table('groups')->count() == 0) {
            DB::table('groups')->insert([
                // Group 1: General Discussion
                [
                    'name' => 'General Discussion',
                    'owner_id' => $adminUserId,
                    'is_private' => false,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                // Group 2: Admins Only
                [
                    'name' => 'Admins Only',
                    'owner_id' => $adminUserId,
                    'is_private' => true,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
