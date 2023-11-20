<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $films = Film::paginate(10);

        return view ('admin.films.index')->with('films', $films);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.films.create')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //https://laravel.com/docs/10.x/validation
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'run_time' => 'required|max:3',
            'release_date' => 'required',
            'age_rating' => 'required|max:2',
            'original_language' => 'required',
            'director' => 'required',
            'film_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // creates unique name for the image file
        if ($request->hasFile('film_image')) {
            $image = $request->file('film_image');
            $imageName = time() . '.' . $image->extension();
        // stores file in public disk under the film directory
            $image->storeAs('public/films', $imageName);
            $film_image_name = 'storage/films/' . $imageName;
        }


        Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'run_time' => $request->run_time,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating,
            'original_language' => $request->original_language,
            'director' => $request->director,
            'film_image' => $film_image_name
        ]);
        return to_route('films.index')->with('success', 'Film created successfully');
        // return to_route('films.index', $film)->with('success', 'Film created successfully!');



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
    public function edit(Film $film)
    {
         return view('films.edit')->with('film', $film);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'run_time' => 'required|max:3',
            'release_date' => 'required',
            'age_rating' => 'required|max:2',
            'original_language' => 'required',
            'director' => 'required',
            'film_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        if ($request->hasFile('film_image')) {
            $image = $request->file('film_image');
            $imageName = time() . '.' . $image->extension();

            $image->storeAs('public/films', $imageName);
            $film_image_name = 'storage/films/' . $imageName;
        }

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'run_time' => $request->run_time,
            'release_date' => $request->release_date,
            'age_rating' => $request->age_rating,
            'original_language' => $request->original_language,
            'director' => $request->director,
            'film_image' => $film_image_name
        ]);
        // return to_route('films.show')->with('success', 'Film updated successfully');
        return to_route('films.show', $film)->with('success', 'Film updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return to_route('films.index')->with('success', 'Film deleted successfully');
    }
}
