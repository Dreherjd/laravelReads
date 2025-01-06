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
        Schema::create('books', function (Blueprint $table) {
            $table->integer('book_id', true);
            $table->string('book_title', 50);
            $table->string('brief_synops', 4000);
            $table->integer('author_id');
            $table->date('published_date')->nullable();
            $table->integer('number_of_pages');
            $table->decimal('avg_rating', 10, 0)->nullable();
            $table->integer('number_of_reviews')->nullable();
            $table->integer('number_of_ratings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
