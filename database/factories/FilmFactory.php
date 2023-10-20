<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Film;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'run_time' => fake()->numerify,
            'release_date' =>fake()->date,
            'age_rating' => fake()->numerify,
            'original_language' => fake()->word,
            'director' => fake()->name,
            'film_image' => fake()->imageUrl,


        ];
    }
}
