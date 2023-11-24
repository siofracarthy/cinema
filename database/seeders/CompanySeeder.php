<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Publisher::factory()
        ->times(3) //creates (3) companies
        ->hasFilms(4) //links books to publisher
        ->create();
    }
}
