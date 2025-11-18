<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);

        // ✅ Buat 1 user untuk testing
        User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '08123456789',
            'address' => 'Jl. Test No. 123, Surabaya',
        ]);

        // ✅ Buat user lain
        User::create([
            'name' => 'Michelle',
            'email' => 'michelle@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '08567890123',
            'address' => 'Jl. Solo No. 456, Surabaya',
        ]);

        // ✅ Buat 100 user random
        User::factory()->count(100)->create();
    }
}