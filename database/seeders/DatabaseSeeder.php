<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
        
        \App\Models\User::factory()->count(100)->create();

        // Cart harus setelah user dibuat
        $this->call([
            CartSeeder::class,
            UserSeeder::class
        ]);
    }
}