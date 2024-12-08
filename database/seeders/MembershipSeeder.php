<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now(); // Current timestamp

        $stateBars = [
            ['name' => 'Alabama State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Alaska Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Arizona', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Arkansas Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of California', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Colorado Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Connecticut Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Delaware State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'District of Columbia Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'The Florida Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Georgia', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Hawaii State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Idaho State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Illinois State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Indiana State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Iowa State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Kansas Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Kentucky Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Louisiana State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Maine State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Maryland State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Massachusetts Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Michigan', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Minnesota State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'The Mississippi Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'The Missouri Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Montana', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Nebraska State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Nevada', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'New Hampshire Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'New Jersey State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of New Mexico', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'New York State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'North Carolina Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar Association of North Dakota', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Ohio State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Oklahoma Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Oregon State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Pennsylvania Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Rhode Island Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'South Carolina Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of South Dakota', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Tennessee Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Texas', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Utah State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Vermont Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Virginia State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Washington State Bar Association', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'West Virginia State Bar', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'State Bar of Wisconsin', 'type' => 'State Bar', 'created_at' => $now],
            ['name' => 'Wyoming State Bar', 'type' => 'State Bar', 'created_at' => $now],
        ];

        DB::table('membership')->insert($stateBars);

        $nationalBars = [
            ['name' => 'American Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'National Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'Federal Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'Hispanic National Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'National Asian Pacific American Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'National Native American Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'National LGBT Bar Association', 'type' => 'National Bar', 'created_at' => $now],
            ['name' => 'National Association of Women Lawyers', 'type' => 'National Bar', 'created_at' => $now],
        ];

        DB::table('membership')->insert($nationalBars);

        $specialtyBars = [
            ['name' => 'American Immigration Lawyers Association', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'National Association of Criminal Defense Lawyers', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'American Health Lawyers Association', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'American Intellectual Property Law Association', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'Environmental Law Institute', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'Maritime Law Association of the United States', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'International Association of Defense Counsel', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'National Employment Lawyers Association', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'American Association for Justice', 'type' => 'Specialty Bar', 'created_at' => $now],
            ['name' => 'Association of Corporate Counsel', 'type' => 'Specialty Bar', 'created_at' => $now],
        ];

        DB::table('membership')->insert($specialtyBars);
    }
}
