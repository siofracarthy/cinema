<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'run_time',
        'release_date',
        'age_rating',
        'original_language',
        'director',
        'film_image',
    ];



}
