<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GroupMemberSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Define the correct, existing User ID
        $adminUserId = 'PH202511100001';

        // 2. Define the Group IDs (assuming they are 1 and 2 from GroupSeeder)
        $groupIds = [1, 2];

        $now = Carbon::now();
        $memberships = [];

        foreach ($groupIds as $groupId) {
            // Use an existence check (group_id and user_id form the composite key)
            $exists = DB::table('group_members')
                        ->where('group_id', $groupId)
                        ->where('user_id', $adminUserId)
                        ->exists();

            if (!$exists) {
                $memberships[] = [
                    'group_id' => $groupId,
                    'user_id' => $adminUserId, // 🚨 CORRECTED USER ID
                    'joined_at' => $now,
                ];
            }
        }

        // Only insert if there are new memberships to add
        if (!empty($memberships)) {
            DB::table('group_members')->insert($memberships);
        }
    }
}
