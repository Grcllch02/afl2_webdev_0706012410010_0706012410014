<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
         // 🔹 Membuat 5 user dummy menggunakan factory
        User::factory()->count(5)->create();

        // Buat 1 user dummy
        User::factory()->create([
            'email' => 'buelizbaik@email.com',
            'password' => bcrypt('password'),
            'phone' => '082343527',
            'address' => 'Jl. Tunjungan',
        ]);

        // Cart harus setelah user dibuat
        $this->call([
            CartSeeder::class,
        ]);
    }
}
