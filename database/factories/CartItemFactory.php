<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
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
            'cart_id' => Cart::inRandomOrder()->first()->cart_id ?? 1,
            'product_id' => Product::inRandomOrder()->first()->product_id ?? 1,
            'quantity' => $this->faker->numberBetween(1, 10)
        ];
    }
}
