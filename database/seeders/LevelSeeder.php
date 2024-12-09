<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            ['name' => 'Associate', 'created_at' => $now],
			['name' => 'Attorney', 'created_at' => $now],
			['name' => 'Consultant', 'created_at' => $now],
            ['name' => 'Partner', 'created_at' => $now],
            ['name' => 'Senior Partner', 'created_at' => $now],
			['name' => 'Consulting Counsel', 'created_at' => $now],
            ['name' => 'Managing Partner', 'created_at' => $now],
            ['name' => 'Of Counsel', 'created_at' => $now],
            ['name' => 'Staff Attorney', 'created_at' => $now],
            ['name' => 'Law Clerk', 'created_at' => $now],
            ['name' => 'Legislative Assistant', 'created_at' => $now],			
        ];

        DB::table('level')->insert($levels);
    }
}
