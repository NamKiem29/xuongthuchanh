<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'image'=> $this->faker->url,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'discount_percent' => $this->faker->boolean(30) ? $this->faker->numberBetween(5, 50) : 0,
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => Category::inRandomOrder()->first()->category_id ?? 1,
            'brand_id' => Brand::inRandomOrder()->first()->brand_id ?? 1,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
