<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'payment_method' => $this->faker->randomElement(['cod', 'credit_card', 'paypal']),
            'payment_status' => $this->faker->randomElement(['pending', 'completed', 'failed', 'refunded'])
        ];
    }
}
