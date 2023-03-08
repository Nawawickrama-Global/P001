<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create Administrator
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'contact_number' => '0711234567',
            'email' => 'admin@gmail.com',
            'user_type' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
