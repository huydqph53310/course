<?php

namespace Database\Factories;

use App;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'course_id' => App\Models\Course::factory(),
            'content' => fake()->paragraph(), // Nội dung bình luận
            'rating' => rand(1, 5), // Đánh giá từ 1 đến 5
            'is_approved' => fake()->boolean(), // Trạng thái phê duyệt
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
