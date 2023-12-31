<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Film;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('run_time');
            $table->date('release_date');
            $table->string('age_rating');
            $table->string('original_language');
            $table->string('director');
            $table->string('film_image');


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }

    // $film = new Film();
    // $film->title = 'Sample film title';
    // $film->description = 'Sample film description';
    // $film->save();

    // $film = Film::create([
    //     'title' => 'Another film title',
    //     'description' => 'Another film description',
    // ]);
};
