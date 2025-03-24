<?php

namespace Database\Factories;

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
            //
            'user_id' => User::inRandomOrder()->first()->user_id ?? 1,
            'total_price' => $this->faker->randomFloat(2, 10, 100),
            'order_status' => $this->faker->randomElement( ['pending', 'confirmed', 'processing', 'shipping','shipped', 'delivered','cancelled','returned', 'refunded', 'failed']),
            'shipping_address' => $this->faker->word(),
            'payment_method' => $this->faker->randomElement(['cod', 'credit_card', 'paypal'])
        ];
    }
}
