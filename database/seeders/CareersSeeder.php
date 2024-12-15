<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('careers')->insert([
            'job_title' => 'Paralegal',
            'location' => 'Charlotte, NC',
            'employment_type' => 'full-time',
            'job_summary' => 'We are looking for a Paralegal to join our team.',
            'responsibilities' => 'Drafting legal documents, filing motions, and other legal documents.',
            'qualifications' => 'Bachelor\'s degree in legal studies or related field.',
            'skills' => 'Strong communication skills, ability to work in a fast-paced environment.',
            'practice_area' => 'Litigation',
            'salary_benefits' => '$50,000 - $60,000',
            'application_deadline' => '2024-12-31',
            'job_posting_date' => '2024-12-15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
