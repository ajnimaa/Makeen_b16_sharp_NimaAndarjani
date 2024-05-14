<?php

namespace Database\Seeders;

use App\Models\Factor;
use App\Models\Massage;
use App\Models\Note;
use App\Models\Order;
use App\Models\Product;
use App\Models\Task;
use App\Models\Team;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Warrenty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = User::factory()->count(10)->create();
        // $product = Product::factory()->count(10)->create();
        // $order = Order::factory()->count(10)->for(User::factory())->create();
        // $team = Team::factory()->count(10)->create();
        // $task = Task::factory()->count(10)->create();
        // $ticket = Ticket::factory()->count(10)->create();
        // $note = Note::factory()->count(10)->create();
        // $factor = Factor::factory()->count(10)->create();
        // $warrenty = Warrenty::factory()->count(10)->create();
        // $massage = Massage::factory()->count(10)->create();

        $user = User::factory()
        ->has(Order::factory()->has(Factor::factory()->count(3))->has(Product::factory()))->count(3)->create();
    }
}
