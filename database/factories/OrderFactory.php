<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_name' => fake()->word(),
            'order_code' => fake()->randomNumber(8 , true),
            'order_delivery_time' => fake()->dateTime(),
            'delivery_method' => fake()->randomElement(['in person' , 'online']),
            'user_id' => User::factory(),
            'product_id' => Product::factory()
        ];
    }
}
