<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BioSeeder extends Seeder
{
    public function run()
    {
        // Only seed the bio table if it's empty
        if (DB::table('bio')->count() > 0) {
            return;
        }
        DB::table('bio')->insert([
            [
                'first_name' => 'Bob',
                'middle_initial' => 'R',
                'last_name' => 'McCullough',
                'email' => 'bob.mccullough@taylortaxlaw.com',
                'phone_number' => '843.723.2000',
                'headshot' => 'testing.jpg',
                'created_at' => now(),
                'firm_id' => 1,
            ],
            [
                'first_name' => 'Alexander',
                'middle_initial' => 'P',
                'last_name' => 'Evans',
                'email' => 'alexander.evans@taylortaxlaw.com',
                'phone_number' => '843.723.2000',
                'headshot' => 'testing.jpg',
                'created_at' => now(),
                'firm_id' => 1,
            ],
            [
                'first_name' => 'David',
                'middle_initial' => null,
                'last_name' => 'Taylor',
                'email' => 'david.taylor@taylortaxlaw.com',
                'phone_number' => '843.723.2000',
                'headshot' => 'testing.jpg',
                'created_at' => now(),
                'firm_id' => 1,
            ],
        ]);
    }
}
