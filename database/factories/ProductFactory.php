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
            'product_name' => fake()->word(),
            'product_code' => fake()->randomNumber(8, true),
            'product_price' => fake()->randomNumber(),
            'inventory' => fake()->numberBetween(0, 1000),
            'warrenty' => fake()->randomNumber(),
            'image_path' => fake()->mimeType(),
        ];
    }
}
