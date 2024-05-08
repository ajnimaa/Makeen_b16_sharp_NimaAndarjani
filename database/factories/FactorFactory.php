<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factor>
 */
class FactorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->randomNumber(),
            'number' => fake()->randomNumber(8, true),
            'seller_name' => fake()->name(),
            'description' => fake()->text(),
            'warrenty_started_at' => fake()->date(),
            'warrenty_ended_at' => fake()->date(),
            'order_id' => Order::factory()
        ];
    }
}
