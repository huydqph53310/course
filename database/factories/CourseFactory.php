<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'description' => Str::limit($this->faker->paragraphs(2, true), 250),
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'cats'),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'discount_price' => $this->faker->numberBetween(10000, 500000),
            'category_id' => \App\Models\Category::factory(),
            'total_time' => $this->faker->numberBetween(60, 600),
            'teacher_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'status' => $this->faker->randomElement(['pending', 'active', 'rejected']),
            'views' => $this->faker->numberBetween(0, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
