<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Lập trình PHP',
                'Lập trình Java',
                'Lập trình Python',
                'Lập trình C#',
                'Lập trình JavaScript',
            ]),
            'description' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
