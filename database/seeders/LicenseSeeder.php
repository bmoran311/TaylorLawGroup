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
            ['name' => 'Alabama', 'type' => 'State License'],
            ['name' => 'Alaska', 'type' => 'State License'],
            ['name' => 'American Samoa', 'type' => 'Territorial License'],
            ['name' => 'Arizona', 'type' => 'State License'],
            ['name' => 'Arkansas', 'type' => 'State License'],
            ['name' => 'California', 'type' => 'State License'],
            ['name' => 'Colorado', 'type' => 'State License'],
            ['name' => 'Connecticut', 'type' => 'State License'],
            ['name' => 'Delaware', 'type' => 'State License'],
            ['name' => 'District of Columbia', 'type' => 'Federal License'],
            ['name' => 'Florida', 'type' => 'State License'],
            ['name' => 'Georgia', 'type' => 'State License'],
            ['name' => 'Guam', 'type' => 'Territorial License'],
            ['name' => 'Hawaii', 'type' => 'State License'],
            ['name' => 'Idaho', 'type' => 'State License'],
            ['name' => 'Illinois', 'type' => 'State License'],
            ['name' => 'Indiana', 'type' => 'State License'],
            ['name' => 'Iowa', 'type' => 'State License'],
            ['name' => 'Kansas', 'type' => 'State License'],
            ['name' => 'Kentucky', 'type' => 'State License'],
            ['name' => 'Louisiana', 'type' => 'State License'],
            ['name' => 'Maine', 'type' => 'State License'],
            ['name' => 'Maryland', 'type' => 'State License'],
            ['name' => 'Massachusetts', 'type' => 'State License'],
            ['name' => 'Michigan', 'type' => 'State License'],
            ['name' => 'Minnesota', 'type' => 'State License'],
            ['name' => 'Mississippi', 'type' => 'State License'],
            ['name' => 'Missouri', 'type' => 'State License'],
            ['name' => 'Montana', 'type' => 'State License'],
            ['name' => 'Nebraska', 'type' => 'State License'],
            ['name' => 'Nevada', 'type' => 'State License'],
            ['name' => 'New Hampshire', 'type' => 'State License'],
            ['name' => 'New Jersey', 'type' => 'State License'],
            ['name' => 'New Mexico', 'type' => 'State License'],
            ['name' => 'New York', 'type' => 'State License'],
            ['name' => 'North Carolina', 'type' => 'State License'],
            ['name' => 'North Dakota', 'type' => 'State License'],
            ['name' => 'Northern Mariana Islands', 'type' => 'Territorial License'],
            ['name' => 'Ohio', 'type' => 'State License'],
            ['name' => 'Oklahoma', 'type' => 'State License'],
            ['name' => 'Oregon', 'type' => 'State License'],
            ['name' => 'Pennsylvania', 'type' => 'State License'],
            ['name' => 'Puerto Rico', 'type' => 'Territorial License'],
            ['name' => 'Rhode Island', 'type' => 'State License'],
            ['name' => 'South Carolina', 'type' => 'State License'],
            ['name' => 'South Dakota', 'type' => 'State License'],
            ['name' => 'Tennessee', 'type' => 'State License'],
            ['name' => 'Texas', 'type' => 'State License'],
            ['name' => 'U.S. Virgin Islands', 'type' => 'Territorial License'],
            ['name' => 'Utah', 'type' => 'State License'],
            ['name' => 'Vermont', 'type' => 'State License'],
            ['name' => 'Virginia', 'type' => 'State License'],
            ['name' => 'Washington', 'type' => 'State License'],
            ['name' => 'West Virginia', 'type' => 'State License'],
            ['name' => 'Wisconsin', 'type' => 'State License'],
            ['name' => 'Wyoming', 'type' => 'State License']
        ];

        DB::table('licenses')->insert($licenses);
    }
}
