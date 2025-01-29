<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('firm')->insert([
            'name' => 'Taylor Law',
            'url' => 'https://www.taylortaxlaw.com',
            'parent_id' => null, // Top-level firm has no parent
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
