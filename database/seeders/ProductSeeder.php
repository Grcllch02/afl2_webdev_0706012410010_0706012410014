<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Bola Besar (category_id = 1)
        Product::create([
            'name' => 'Bola Futsal',
            'category_id' => 1,
            'price' => 120000.00,
            'stock_quantity' => 20,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bolafutsal.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Bola Basket',
            'category_id' => 1,
            'price' => 85000.00,
            'stock_quantity' => 19,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bolabasket.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Bola Sepak',
            'category_id' => 1,
            'price' => 110000.00,
            'stock_quantity' => 25,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bolasepak.png?raw=true'
        ]);

        Product::create([
            'name' => 'Bola Voli',
            'category_id' => 1,
            'price' => 290000.00,
            'stock_quantity' => 29,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bolavoli.png?raw=true'
        ]);

        // Badminton (category_id = 2)
        Product::create([
            'name' => 'Raket YTY',
            'category_id' => 2,
            'price' => 48000.00,
            'stock_quantity' => 19,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/raketyty.png?raw=true'
        ]);

        Product::create([
            'name' => 'Raket Arrowpoint',
            'category_id' => 2,
            'price' => 115000.00,
            'stock_quantity' => 30,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/raketarrowpoint.png?raw=true'
        ]);

        Product::create([
            'name' => 'Raket Yonex',
            'category_id' => 2,
            'price' => 450000.00,
            'stock_quantity' => 34,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/raketyonex.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Shuttlecock',
            'category_id' => 2,
            'price' => 125000.00,
            'stock_quantity' => 100,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/shuttlecock.png?raw=true'
        ]);

        // Alat Renang (category_id = 3)
        Product::create([
            'name' => 'Kacamata Mako',
            'category_id' => 3,
            'price' => 105000.00,
            'stock_quantity' => 12,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/kacamatamako.png?raw=true'
        ]);

        Product::create([
            'name' => 'Rompi Dewasa',
            'category_id' => 3,
            'price' => 90000.00,
            'stock_quantity' => 38,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/rompidewasa.png?raw=true'
        ]);

        Product::create([
            'name' => 'Papan Renang',
            'category_id' => 3,
            'price' => 45000.00,
            'stock_quantity' => 34,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/papanrenang.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Baju Renang',
            'category_id' => 3,
            'price' => 90000.00,
            'stock_quantity' => 100,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bajurenang.png?raw=true'
        ]);
        
        // Billiard (category_id = 4)
        Product::create([
            'name' => 'Stik Scorpion',
            'category_id' => 4,
            'price' => 200000.00,
            'stock_quantity' => 18,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/stikscorpion.png?raw=true'
        ]);

        Product::create([
            'name' => 'Tas Murrey',
            'category_id' => 4,
            'price' => 225000.00,
            'stock_quantity' => 20,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/tasmurrey.png?raw=true'
        ]);

        Product::create([
            'name' => 'Bola Billiard',
            'category_id' => 4,
            'price' => 225000.00,
            'stock_quantity' => 39,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/bolabilliard.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Sarung Tangan',
            'category_id' => 4,
            'price' => 16000.00,
            'stock_quantity' => 100,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/sarungtangan.png?raw=true'
        ]);

        // Peralatan Lainnya (category_id = 5)
        Product::create([
            'name' => 'Dumbbell',
            'category_id' => 5,
            'price' => 21000.00,
            'stock_quantity' => 16,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/dumbbell.png?raw=true'
        ]);

        Product::create([
            'name' => 'Lompat Tali',
            'category_id' => 5,
            'price' => 50000.00,
            'stock_quantity' => 60,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/lompattali.png?raw=true'
        ]);

        Product::create([
            'name' => 'Pelindung Lutut',
            'category_id' => 5,
            'price' => 60000.00,
            'stock_quantity' => 33,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/pelindunglutut.png?raw=true'
        ]);
        
        Product::create([
            'name' => 'Hand Grip',
            'category_id' => 5,
            'price' => 28000.00,
            'stock_quantity' => 45,
            'image_url' => 'https://github.com/michellempi/AFL3-Webprog/blob/main/handgrip.png?raw=true'
        ]);
    }
}