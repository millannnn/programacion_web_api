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
        Schema::create('books_literary_genres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('literary_genre_id');
            $table->bigInteger('book_id');
            $table->timestamps();

            $table->foreign('literary_genre_id')->references('id')->on('literary_genres');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_literary_genres');
    }
};
