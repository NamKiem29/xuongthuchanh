<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'order_id' => Order::inRandomOrder()->first()->order_id ?? 1,
            'product_id' => Product::inRandomOrder()->first()->product_id ?? 1,
            'quantity' => $this->faker->numberBetween(100, 10000),
            'price' => $this->faker->randomFloat(2, 10, 1000000)
        ];
    }
}
