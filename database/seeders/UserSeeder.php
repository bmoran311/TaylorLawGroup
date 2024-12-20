<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Check if users already exist
        if (User::count() > 0) {
            return;
        }
        User::create([
            'name' => 'Brian Moran',
            'email' => 'bmoran@enertia-inc.com',
            'password' => bcrypt('Goirish1011$'),
        ]);

		User::create([
            'name' => 'Brian Moran',
            'email' => 'loweman64@outlook.com',
            'password' => bcrypt('loweman64'),
        ]);

        User::updateOrCreate([
            'name' => 'Justin Johnson',
            'email' => 'systemsevendesigns@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
