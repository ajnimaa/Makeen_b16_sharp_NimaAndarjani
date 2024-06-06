<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => fake()->word(),
            'size' => fake()->randomNumber(5, 'ture'),
            'path' => fake()->mimeType(),
            'ext' => fake()->randomElement(['jpg' , 'pdf'])
        ];
    }
}
