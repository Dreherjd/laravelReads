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
        Schema::create('book_reviews', function (Blueprint $table) {
            $table->integer('book_review_id', true);
            $table->dateTime('book_review_created')->useCurrent();
            $table->integer('book_review_user_id');
            $table->decimal('book_review_score', 10, 0);
            $table->integer('book_id');
            $table->string('book_review_title', 100);
            $table->string('book_review_content', 4000);
            $table->integer('number_of_likes')->nullable();
            $table->string('complete_or_dnf', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_reviews');
    }
};
