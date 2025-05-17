<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Enrollment;
use App\Models\Favorite;
use App\Models\Rating;
use App\Models\Discount;
use App\Models\Certificate;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create additional users
        User::factory(10)->create();

        // Create categories
        Category::factory(5)->create();

        // Create courses with their relationships
        Course::factory(20)->create()->each(function ($course) {
            // Create lessons for each course
            Lesson::factory(rand(5, 10))->create([
                'course_id' => $course->id
            ]);

            // Create quiz for each course
            Quiz::factory(1)->create([
                'course_id' => $course->id
            ])->each(function ($quiz) {
                // Create questions for each quiz
                Question::factory(rand(5, 10))->create([
                    'quiz_id' => $quiz->id
                ])->each(function ($question) {
                    // Create answers for each question
                    Answer::factory(4)->create([
                        'question_id' => $question->id
                    ]);
                });
            });

            // Create comments for each course
            Comment::factory(rand(3, 8))->create([
                'course_id' => $course->id
            ]);

            // Create ratings for each course
            Rating::factory(rand(5, 15))->create([
                'course_id' => $course->id
            ]);
        });

        // Create orders with their details
        Order::factory(15)->create()->each(function ($order) {
            OrderDetail::factory(rand(1, 3))->create([
                'order_id' => $order->id
            ]);
        });

        // Create enrollments
        Enrollment::factory(30)->create();

        // Create favorites
        Favorite::factory(20)->create();

        // Create discounts
        Discount::factory(5)->create();

        // Create certificates
        Certificate::factory(10)->create();
    }
}
