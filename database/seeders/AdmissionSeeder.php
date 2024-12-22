<?php

namespace Database\Seeders;

use App\Models\Admission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admission::truncate();

        $now = Carbon::now();

        $admissions = [
            ['name' => 'U.S. District Court for the Northern District of Alabama', 'state' => 'AL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Middle District of Alabama', 'state' => 'AL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Alabama', 'state' => 'AL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Alaska', 'state' => 'AK', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Arizona', 'state' => 'AZ', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of Arkansas', 'state' => 'AR', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Western District of Arkansas', 'state' => 'AR', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of California', 'state' => 'CA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of California', 'state' => 'CA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Central District of California', 'state' => 'CA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of California', 'state' => 'CA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Colorado', 'state' => 'CO', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Connecticut', 'state' => 'CT', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Delaware', 'state' => 'DE', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Florida', 'state' => 'FL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Middle District of Florida', 'state' => 'FL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Florida', 'state' => 'FL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Georgia', 'state' => 'GA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Middle District of Georgia', 'state' => 'GA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Georgia', 'state' => 'GA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Hawaii', 'state' => 'HI', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Idaho', 'state' => 'ID', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Illinois', 'state' => 'IL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Central District of Illinois', 'state' => 'IL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Illinois', 'state' => 'IL', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Indiana', 'state' => 'IN', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Indiana', 'state' => 'IN', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Iowa', 'state' => 'IA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Iowa', 'state' => 'IA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Kansas', 'state' => 'KS', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of Kentucky', 'state' => 'KY', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Western District of Kentucky', 'state' => 'KY', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of Louisiana', 'state' => 'LA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Middle District of Louisiana', 'state' => 'LA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Western District of Louisiana', 'state' => 'LA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Maine', 'state' => 'ME', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Maryland', 'state' => 'MD', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Massachusetts', 'state' => 'MA', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of Michigan', 'state' => 'MI', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Western District of Michigan', 'state' => 'MI', 'created_at' => $now],
            ['name' => 'U.S. District Court for the District of Minnesota', 'state' => 'MN', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Northern District of Mississippi', 'state' => 'MS', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Southern District of Mississippi', 'state' => 'MS', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Eastern District of Missouri', 'state' => 'MO', 'created_at' => $now],
            ['name' => 'U.S. District Court for the Western District of Missouri', 'state' => 'MO', 'created_at' => $now],
            // Add all remaining districts in a similar pattern
        ];

        DB::table('admission')->insert($admissions);
    }
}
