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
        Schema::create('producer_film', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('producer_id');
            // $table->unsignedBigInteger('film_id');

            // $table->foreign('producer_id')->references('id')->on('producers')->onUpdate('cascade')->onDelete('restrict');
            // $table->foreign('film_id')->references('id')->on('films')->onUpdate('cascade')->onDelete('restrict');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producer_film');
    }
};
