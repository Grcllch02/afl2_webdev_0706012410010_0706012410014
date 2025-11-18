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
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bolafutsal.png'
        ]);

        Product::create([
            'name' => 'Bola Basket',
            'category_id' => 1,
            'price' => 85000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bolabasket.png'
        ]);

        Product::create([
            'name' => 'Bola Sepak',
            'category_id' => 1,
            'price' => 110000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bolasepak.png'
        ]);

        Product::create([
            'name' => 'Bola Voli',
            'category_id' => 1,
            'price' => 290000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bolavoli.png'
        ]);

        // Badminton (category_id = 2)
        Product::create([
            'name' => 'Raket YTY',
            'category_id' => 2,
            'price' => 48000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/raket.png'
        ]);

        Product::create([
            'name' => 'Raket Arrowpoint',
            'category_id' => 2,
            'price' => 115000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/raketarrowpoint.png'
        ]);

        Product::create([
            'name' => 'Raket Yonex',
            'category_id' => 2,
            'price' => 450000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/raketyonex.png'
        ]);

        Product::create([
            'name' => 'Shuttlecock',
            'category_id' => 2,
            'price' => 125000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/shuttlecock.png'
        ]);

        // Alat Renang (category_id = 3)
        Product::create([
            'name' => 'Kacamata Mako',
            'category_id' => 3,
            'price' => 105000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/kacamatamako.png'
        ]);

        Product::create([
            'name' => 'Rompi Dewasa',
            'category_id' => 3,
            'price' => 90000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/rompidewasa.png'
        ]);

        Product::create([
            'name' => 'Papan Renang',
            'category_id' => 3,
            'price' => 45000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/papanrenang.png'
        ]);

        Product::create([
            'name' => 'Baju Renang',
            'category_id' => 3,
            'price' => 90000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bajurenang.png'
        ]);

        // Billiard (category_id = 4)
        Product::create([
            'name' => 'Stik Scorpion',
            'category_id' => 4,
            'price' => 200000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/stikscorpion.png'
        ]);

        Product::create([
            'name' => 'Tas Murrey',
            'category_id' => 4,
            'price' => 225000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/tasmurrey.png'
        ]);

        Product::create([
            'name' => 'Bola Billiard',
            'category_id' => 4,
            'price' => 225000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bolabilliard.png'
        ]);

        Product::create([
            'name' => 'Sarung Tangan',
            'category_id' => 4,
            'price' => 16000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/sarungtangan.png'
        ]);
        // Padel (category_id = 5)
        Product::create([
            'name' => 'Raket Padel Bullpadel',
            'category_id' => 5,
            'price' => 950000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/RaketPadelBullpadel.webp'
        ]);

        Product::create([
            'name' => 'Bola Padel Head',
            'category_id' => 5,
            'price' => 120000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BolaPadelHead.png'
        ]);

        Product::create([
            'name' => 'Tas Raket Padel',
            'category_id' => 5,
            'price' => 240000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/TasRaketPadel.png'
        ]);

        Product::create([
            'name' => 'Baju Padel',
            'category_id' => 5,
            'price' => 50000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/bajupadel.png'
        ]);

        // Tenis (category_id = 6)
        Product::create([
            'name' => 'Raket Wilson',
            'category_id' => 6,
            'price' => 670000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/raketwilson.png'
        ]);

        Product::create([
            'name' => 'Bola Tenis Dunlop',
            'category_id' => 6,
            'price' => 80000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BolaTenisDunlop.png'
        ]);

        Product::create([
            'name' => 'Tas Raket Tenis',
            'category_id' => 6,
            'price' => 180000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/TasRaketTenis.webp'
        ]);

        Product::create([
            'name' => 'Topi Tenis',
            'category_id' => 6,
            'price' => 180000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/topitenis.webp'
        ]);

        // Pingpong (category_id = 7)
        Product::create([
            'name' => 'Bet Pingpong Butterfly',
            'category_id' => 7,
            'price' => 135000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BetPingpongButterfly.webp'
        ]);

        Product::create([
            'name' => 'Bola Pingpong DHS',
            'category_id' => 7,
            'price' => 45000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BolaPingpongDHS.png'
        ]);

        Product::create([
            'name' => 'Net Meja Pingpong',
            'category_id' => 7,
            'price' => 80000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/NetMejaPingpong.webp'
        ]);

        Product::create([
            'name' => 'Tas Pingpong',
            'category_id' => 7,
            'price' => 80000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/taspingpong.png'
        ]);

        // Golf (category_id = 8)
        Product::create([
            'name' => 'Stick Golf Callaway',
            'category_id' => 8,
            'price' => 950000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/StickGolfCallaway.webp'
        ]);

        Product::create([
            'name' => 'Bola Golf Titleist',
            'category_id' => 8,
            'price' => 150000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BolaGolfTitleist.png'
        ]);

        Product::create([
            'name' => 'Sarung Tangan Golf',
            'category_id' => 8,
            'price' => 70000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/SarungTanganGolf.webp'
        ]);

        Product::create([
            'name' => 'Sepatu Golf',
            'category_id' => 8,
            'price' => 70000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/sepatugolf.png'
        ]);

        // Aksesori Olahraga (category_id = 9)
        Product::create([
            'name' => 'Botol Minum Sport',
            'category_id' => 9,
            'price' => 55000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/BotolMinumSport.png'
        ]);

        Product::create([
            'name' => 'Tas Gym',
            'category_id' => 9,
            'price' => 130000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/TasGym.png'
        ]);

        Product::create([
            'name' => 'Headband Olahraga',
            'category_id' => 9,
            'price' => 25000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/HeadbandOlahraga.png'
        ]);

        Product::create([
            'name' => 'Handuk Olahraga',
            'category_id' => 9,
            'price' => 25000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/handukolahraga.png'
        ]);

        // Peralatan Lainnya (category_id = 10)
        Product::create([
            'name' => 'Dumbbell',
            'category_id' => 10,
            'price' => 21000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/dumbbell.png'
        ]);

        Product::create([
            'name' => 'Lompat Tali',
            'category_id' => 10,
            'price' => 50000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/lompattali.png'
        ]);

        Product::create([
            'name' => 'Pelindung Lutut',
            'category_id' => 10,
            'price' => 60000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/pelindunglutut.png'
        ]);

        Product::create([
            'name' => 'Hand Grip',
            'category_id' => 10,
            'price' => 28000.00,
            'stock_quantity' => 100, // Ditambahkan
            'image_url' => 'image/handgrip.png'
        ]);
    }
}