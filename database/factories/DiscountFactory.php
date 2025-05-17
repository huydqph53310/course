<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('DISCOUNT-####'),
            'description' => $this->faker->sentence(),
            'discount_percent' => $this->faker->numberBetween(5, 50),
            'max_usage' => $this->faker->numberBetween(1, 100),
            'current_usage' => $this->faker->numberBetween(0, 50),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+6 months'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
