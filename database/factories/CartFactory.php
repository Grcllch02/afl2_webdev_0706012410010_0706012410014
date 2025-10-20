<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [

            'user_id' => User::inRandomOrder()->value('id'),

            // Ambil product_id secara acak dari tabel products
            'product_id' => Product::inRandomOrder()->value('id'),

            'quantity' => $this->faker->numberBetween(1, 5),
            
        ];
    }
}
