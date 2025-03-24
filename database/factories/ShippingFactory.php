<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
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
            'shipping_status' => $this->faker->randomElement(['pending_pickup', 'in_transit', 'out_for_delivery', 'delivered', 'delivery_failed', 'return_initiated', 'returned', 'cancelled_shipping']),
            'tracking_number' => $this->faker->regexify('[A-Z0-9]{10}'),
        ];
    }
}
