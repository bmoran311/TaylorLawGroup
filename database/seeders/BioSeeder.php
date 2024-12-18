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
                'first_name' => 'Douglas',
                'middle_initial' => 'R',
                'last_name' => 'Foley',
                'email' => 'dfoley@taylorfoleylaw.com',
                'phone_number' => '843.723.2000',
                'created_at' => fake()->dateTimeThisYear(),
                'firm_id' => 1,
            ],
            [
                'first_name' => 'Joseph',
                'middle_initial' => 'P',
                'last_name' => 'Foley',
                'email' => 'jfoley@taylorfoleylaw.com',
                'phone_number' => '843.723.2000',
                'created_at' => fake()->dateTimeThisYear(),
                'firm_id' => 1,
            ],
            [
                'first_name' => 'Connor',
                'middle_initial' => null,
                'last_name' => 'Foley',
                'email' => 'cfoley@taylorfoleylaw.com',
                'phone_number' => '843.723.2000',
                'created_at' => fake()->dateTimeThisYear(),
                'firm_id' => 1,
            ],
        ]);
    }
}
