<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Brian Moran',
            'email' => 'bmoran@enertia-inc.com',
            'password' => bcrypt('Goirish1011$'),
        ]);
		
		\App\Models\User::create([
            'name' => 'Brian Moran',
            'email' => 'loweman64@outlook.com',
            'password' => bcrypt('loweman64'),
        ]);
    }
}
