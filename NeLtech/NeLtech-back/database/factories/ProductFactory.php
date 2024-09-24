<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->name(),
            'img_link' => fake()->imageUrl(),
            'product_description' => fake()->paragraph(),
            'product_price' => fake()->numberBetween(100000, 5000000),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
