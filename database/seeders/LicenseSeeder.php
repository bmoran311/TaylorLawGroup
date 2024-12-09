<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $licenses = [
            ['name' => 'Alabama', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Alaska', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'American Samoa', 'type' => 'Territorial License', 'created_at' => now()],
            ['name' => 'Arizona', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Arkansas', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'California', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Colorado', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Connecticut', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Delaware', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'District of Columbia', 'type' => 'Federal License', 'created_at' => now()],
            ['name' => 'Florida', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Georgia', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Guam', 'type' => 'Territorial License', 'created_at' => now()],
            ['name' => 'Hawaii', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Idaho', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Illinois', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Indiana', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Iowa', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Kansas', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Kentucky', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Louisiana', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Maine', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Maryland', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Massachusetts', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Michigan', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Minnesota', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Mississippi', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Missouri', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Montana', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Nebraska', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Nevada', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'New Hampshire', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'New Jersey', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'New Mexico', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'New York', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'North Carolina', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'North Dakota', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Northern Mariana Islands', 'type' => 'Territorial License', 'created_at' => now()],
            ['name' => 'Ohio', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Oklahoma', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Oregon', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Pennsylvania', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Puerto Rico', 'type' => 'Territorial License', 'created_at' => now()],
            ['name' => 'Rhode Island', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'South Carolina', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'South Dakota', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Tennessee', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Texas', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'U.S. Virgin Islands', 'type' => 'Territorial License', 'created_at' => now()],
            ['name' => 'Utah', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Vermont', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Virginia', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Washington', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'West Virginia', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Wisconsin', 'type' => 'State License', 'created_at' => now()],
            ['name' => 'Wyoming', 'type' => 'State License', 'created_at' => now()]
        ];

        DB::table('license')->insert($licenses);
    }
}
