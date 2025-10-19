<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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

        $imagePaths = [
            'assets/img/portfolio/1.png',
            'assets/img/portfolio/2.png',
            '',
            '',
            '',
            '',
        ];
        //         $table->string('name');
        // // Define the category_id column first
        // $table->unsignedBigInteger('category_id');
        // $table->string('price');
        // $table->string('stock_quantity');
        // $table->string('img_url')->nullable();
        return [
            'name' => $this->faker->words(2, true) . ' Project',
            'price' => $this->faker->numberBetween(1000000, 5000000),
            'image_url' => $this->faker->randomElement($imagePaths),
            
        ];
    }
}
