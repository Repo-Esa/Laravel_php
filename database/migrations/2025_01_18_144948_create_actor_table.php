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
        Schema::create('actor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->references('id')->on('films');
            $table->foreignId('cast_id')->constrained()->references('id')->on('casts');
            $table->string('nama', 45);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor');
    }
};
