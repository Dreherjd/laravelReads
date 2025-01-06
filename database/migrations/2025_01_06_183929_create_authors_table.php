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
        Schema::create('authors', function (Blueprint $table) {
            $table->integer('author_id', true);
            $table->string('author_name', 50);
            $table->string('about_the_author', 4000)->nullable();
            $table->string('author_handle', 50)->nullable();
            $table->string('author_birth_place', 200);
            $table->string('author_personal_site', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
