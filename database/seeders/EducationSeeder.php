<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lawSchools = [
            ['name' => 'American University Washington College of Law', 'city' => 'Washington', 'state' => 'DC'],
            ['name' => 'Arizona State University Sandra Day O\'Connor College of Law', 'city' => 'Phoenix', 'state' => 'AZ'],
            ['name' => 'Boston College Law School', 'city' => 'Newton', 'state' => 'MA'],
            ['name' => 'Boston University School of Law', 'city' => 'Boston', 'state' => 'MA'],
            ['name' => 'Columbia Law School', 'city' => 'New York', 'state' => 'NY'],
            ['name' => 'Cornell Law School', 'city' => 'Ithaca', 'state' => 'NY'],
            ['name' => 'Duke University School of Law', 'city' => 'Durham', 'state' => 'NC'],
            ['name' => 'Emory University School of Law', 'city' => 'Atlanta', 'state' => 'GA'],
            ['name' => 'Fordham University School of Law', 'city' => 'New York', 'state' => 'NY'],
            ['name' => 'Georgetown University Law Center', 'city' => 'Washington', 'state' => 'DC'],
            ['name' => 'Harvard Law School', 'city' => 'Cambridge', 'state' => 'MA'],
            ['name' => 'Northwestern Pritzker School of Law', 'city' => 'Chicago', 'state' => 'IL'],
            ['name' => 'Notre Dame Law School', 'city' => 'Notre Dame', 'state' => 'IN'],
            ['name' => 'NYU School of Law', 'city' => 'New York', 'state' => 'NY'],
            ['name' => 'Stanford Law School', 'city' => 'Stanford', 'state' => 'CA'],
            ['name' => 'University of California, Berkeley, School of Law', 'city' => 'Berkeley', 'state' => 'CA'],
            ['name' => 'University of California, Los Angeles, School of Law', 'city' => 'Los Angeles', 'state' => 'CA'],
            ['name' => 'University of Chicago Law School', 'city' => 'Chicago', 'state' => 'IL'],
            ['name' => 'University of Michigan Law School', 'city' => 'Ann Arbor', 'state' => 'MI'],
            ['name' => 'University of Pennsylvania Carey Law School', 'city' => 'Philadelphia', 'state' => 'PA'],
            ['name' => 'University of Virginia School of Law', 'city' => 'Charlottesville', 'state' => 'VA'],
            ['name' => 'Vanderbilt University Law School', 'city' => 'Nashville', 'state' => 'TN'],
            ['name' => 'Yale Law School', 'city' => 'New Haven', 'state' => 'CT'],            
        ];

        foreach ($lawSchools as &$school) {
            $school['created_at'] = Carbon::now();
            $school['updated_at'] = Carbon::now();
        }

        DB::table('education')->insert($lawSchools);
    }
}
