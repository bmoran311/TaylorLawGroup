<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    public function run()
    {
        $awards = [
            ['name' => 'Rising Star', 'publication' => 'New York Metro Super Lawyers Magazine'],
            ['name' => 'The Best Lawyers in America', 'publication' => null],
            ['name' => 'Top 40 Under 40', 'publication' => 'National Trial Lawyers'],
            ['name' => 'AV Preeminent Rating', 'publication' => 'Martindale-Hubbell'],
            ['name' => 'Lawyer of the Year', 'publication' => 'The Best Lawyers in America'],
            ['name' => 'Super Lawyers', 'publication' => 'Top 100 Attorneys'],
            ['name' => 'Chambers USA', 'publication' => 'Band 1 Ranking'],
            ['name' => 'Legal Elite', 'publication' => 'Business North Carolina'],
            ['name' => 'Client Choice Awards', 'publication' => 'International Law Office'],
            ['name' => 'Benchmark Litigation', 'publication' => 'Top Litigation Firms'],
            ['name' => 'Top 10 Lawyers Under 40', 'publication' => 'American Institute of Trial Lawyers'],
            ['name' => 'Leadership in Law', 'publication' => 'National Law Journal'],
            ['name' => 'Litigator of the Year', 'publication' => 'American Lawyer'],
            ['name' => 'Lawdragon 500 Leading Lawyers in America', 'publication' => null],
            ['name' => 'Who\'s Who Legal', 'publication' => 'Arbitration Experts'],
            ['name' => 'Global Elite Thought Leaders', 'publication' => 'Who\'s Who Legal'],
            ['name' => 'Dealmakers of the Year', 'publication' => 'American Lawyer'],
            ['name' => 'Top 100 Trial Lawyers', 'publication' => 'National Trial Lawyers'],
            ['name' => 'In-House Counsel of the Year', 'publication' => 'ACC'],
            ['name' => 'Top Women Lawyers', 'publication' => 'National Association of Women Lawyers'],
            ['name' => 'Legal Innovator Award', 'publication' => 'Financial Times'],
            ['name' => 'M&A Lawyer of the Year', 'publication' => 'Global M&A Network'],
            ['name' => 'Law Firm of the Year', 'publication' => 'U.S. News & World Report'],
            ['name' => 'Top 100 Women in Litigation', 'publication' => 'Benchmark Litigation'],
            ['name' => 'Appellate Lawyer of the Year', 'publication' => 'Law360'],
            ['name' => 'Rising Legal Star', 'publication' => 'Chambers Associate'],
            ['name' => 'Best of the Best USA', 'publication' => 'Euromoney Legal Media Group'],
            ['name' => 'Top Attorney Award', 'publication' => 'Martindale-Hubbell'],
            ['name' => 'IP Stars', 'publication' => 'Managing Intellectual Property'],
            ['name' => 'Litigation Star', 'publication' => 'Benchmark Litigation'],
            ['name' => 'Environmental Lawyer of the Year', 'publication' => 'Who\'s Who Legal'],
            ['name' => 'Best Lawyers Under 40', 'publication' => 'HNBA'],
            ['name' => 'Energy Lawyer of the Year', 'publication' => 'Law360'],
            ['name' => 'Pro Bono Publico Award', 'publication' => 'American Bar Association'],
            ['name' => 'Legal Professional of the Year', 'publication' => 'Corporate Counsel'],
            ['name' => 'Class Action Litigator of the Year', 'publication' => 'Benchmark Plaintiff'],
            ['name' => 'Patent Lawyer of the Year', 'publication' => 'IAM Patent 1000'],
            ['name' => 'Employment Lawyer of the Year', 'publication' => 'Chambers USA'],
            ['name' => 'Diversity Initiative of the Year', 'publication' => 'Legalweek'],
            ['name' => 'General Counsel of the Year', 'publication' => 'ALM Corporate Counsel'],
            ['name' => 'Top Healthcare Lawyers', 'publication' => 'Chambers USA'],
            ['name' => 'Best Legal Boutique', 'publication' => 'Global Restructuring Review'],
            ['name' => 'Rising Star in Energy Law', 'publication' => 'Energy Law Institute'],
            ['name' => 'Privacy & Data Security Trailblazer', 'publication' => 'National Law Journal'],
            ['name' => 'White-Collar Crime Lawyer of the Year', 'publication' => 'Global Investigations Review'],
            ['name' => 'Women in Law Awards', 'publication' => 'Lawyer Monthly'],
            ['name' => 'Sports Lawyer of the Year', 'publication' => 'Who\'s Who Legal'],
            ['name' => 'Best Intellectual Property Firm', 'publication' => 'Managing IP'],
            ['name' => 'Real Estate Lawyer of the Year', 'publication' => 'Chambers USA'],
            ['name' => 'Top 50 Litigation Lawyers', 'publication' => 'Euromoney Legal Media Group'],
        ];

        foreach ($awards as $award) {
            DB::table('award')->insert([
                'name' => $award['name'],
                'publication' => $award['publication'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
