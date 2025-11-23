<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Bola Besar']);
        Category::create(['name' => 'Badminton']);
        Category::create(['name' => 'Alat Renang']);
        Category::create(['name' => 'Billiard']);
        Category::create(['name' => 'Padel']);
        Category::create(['name' => 'Tenis']);
        Category::create(['name' => 'Pingpong']);
        Category::create(['name' => 'Golf']);
        Category::create(['name' => 'Aksesori Olahraga']);
        Category::create(['name' => 'Peralatan Lainnya']);
    }
}