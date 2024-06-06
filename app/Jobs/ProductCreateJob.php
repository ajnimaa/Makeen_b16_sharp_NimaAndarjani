<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProductCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Product::create(['product_name' => fake()->word(),
        'product_code' => fake()->randomNumber(8, true),
        'product_price' => fake()->randomNumber(),
        'inventory' => fake()->numberBetween(0, 1000),
        'warrenty' => fake()->randomNumber(),
        'image_path' => fake()->mimeType(),]);

    }
}
