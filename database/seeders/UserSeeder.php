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
        // if (User::count() > 0) {
        //     return;
        // }


        User::updateOrCreate(['email' => 'bmoran@enertia-inc.com',], [
            'name' => 'Brian Moran',
            'password' => Hash::make('Goirish1011$'),
        ]);

        User::updateOrCreate(['email' => 'loweman64@outlook.com',], [
            'name' => 'Brian Moran',
            'password' => Hash::make('loweman64'),
        ]);

        User::updateOrCreate(['email' => 'systemsevendesigns@gmail.com',], [
            'name' => 'Justin Johnson',
            'password' => Hash::make('password'),
        ]);
    }
}
