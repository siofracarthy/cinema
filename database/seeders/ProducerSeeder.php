<?php

namespace Database\Seeders;

use App\Models\Producer;
use App\Models\Film;
use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Producer::factory()
        ->times(3)
        ->create();

        foreach(Film::all() as $film)
        {
            $producers = Producer::inRandomOrder()->take(rand(1,3))->pluck('id');
            $film->producers()->attach($producers);
        }
    }
}
