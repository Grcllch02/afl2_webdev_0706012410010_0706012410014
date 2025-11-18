<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // untuk adminnya 
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
            'status' => 'admin',
            'phone' => '081234567890',
            'address' => 'Admin Address'
        ]);

        // User biasa
        User::create([
            'name' => 'User',
            'email' => 'user@localhost',
            'password' => bcrypt('password'),
            'status' => 'user',
            'phone' => '081234567891',
            'address' => 'User Address'
        ]);
    }
}
