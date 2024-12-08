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
            'password' => bcrypt('Goirish311$'),
        ]);
    }
}
