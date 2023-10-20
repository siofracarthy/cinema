<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view ('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'run_time' => 'required'
        ]);

        Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'run_time' => $request->run_time,
            'release_date' => fake()->date,
            'age_rating' => 18,
            'original_language' => "test original language",
            'director' => "test director",
            'film_image' => "test film image"
        ]);
        return to_route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('films.show')->with('film', $film);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
