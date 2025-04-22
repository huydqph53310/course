<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->text(column: 'content');
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('discount_price',10,2)->default(0);
            $table->string('thumbnail');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('teacher_id')->constrained('users');
            $table->enum('status', ['pending', 'active', 'rejected'])->default('active');
            $table->string('total_time');
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
