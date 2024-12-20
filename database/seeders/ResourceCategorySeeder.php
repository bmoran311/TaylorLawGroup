<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ResourceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'White Papers', 'sort_order' => 1],
            ['name' => 'Guides', 'sort_order' => 2],
            ['name' => 'Checklists', 'sort_order' => 3],
            ['name' => 'Infographics', 'sort_order' => 4],
            ['name' => 'Quick Reference Guides', 'sort_order' => 5],
            ['name' => 'Brochures', 'sort_order' => 6],
        ];

        foreach ($categories as $category) {
            DB::table('resource_category')->insert([
                'name' => $category['name'],
                'firm_id' => '1',
                'sort_order' => $category['sort_order'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
