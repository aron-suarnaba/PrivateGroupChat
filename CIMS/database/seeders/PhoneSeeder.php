<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Phone; // Assuming your Phone model is in App\Models\Phone

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table before seeding (optional, but good for clean runs)
        // Phone::truncate();

        // --- Seed Data for 'phone' table ---

        DB::table('phone')->insert([
            // 1. Issued Phone Record (Still with the user 'Alice Smith')
            [
                'model' => 'iPhone 14 Pro',
                'serial_num' => 'G6Z9M1T2C4',
                'ramRom' => '8GB/256GB',
                'imei' => '355883011234567',
                'issued_accessories' => 'Original box, charger, protective case',
                'with_cashout' => false,
                'issued_to' => 'Alice Smith',
                'date_issued' => '2025-01-15',
                'issued_by' => 'Carol White', // Assuming Carol is in Purchasing
                'issuedAcknowledgementIT' => true,
                'issuedAcknowledgementPurchasing' => true,
                'returned_accessories' => null, // null because it hasn't been returned
                'returned_by' => null,
                'returned_date' => null,
                'returned_to' => null,
                'returnedAcknowledgementIT' => false,
                'returnedAcknowledgementPurchasing' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Returned Phone Record (Completed asset cycle)
            [
                'model' => 'Samsung Galaxy S22',
                'serial_num' => 'A7F4J8S3K1',
                'ramRom' => '8GB/128GB',
                'imei' => '359876009876543',
                'issued_accessories' => 'Original box, charger, SIM eject tool',
                'with_cashout' => true,
                'issued_to' => 'David Lee', // Assuming David was the previous user
                'date_issued' => '2023-08-20',
                'issued_by' => 'Carol White',
                'issuedAcknowledgementIT' => true,
                'issuedAcknowledgementPurchasing' => true,
                'returned_accessories' => 'Charger, SIM eject tool (Box missing)', // Details upon return
                'returned_by' => 'David Lee',
                'returned_date' => '2024-11-25',
                'returned_to' => 'Alice Smith', // Assuming Alice (IT) received it
                'returnedAcknowledgementIT' => true,
                'returnedAcknowledgementPurchasing' => true,
                'created_at' => now()->subYear(),
                'updated_at' => now(),
            ],
        ]);
    }
}
