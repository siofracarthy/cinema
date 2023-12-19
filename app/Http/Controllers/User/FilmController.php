<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('user');

        $films = Film::paginate(10);

        return view ('user.films.index')->with('films', $films);
    }


    public function edit(Film $film)
    {
         return view('films.edit')->with('film', $film);
    }

    public function show(Film $film)
    {
        return view('user.films.show')->with('film', $film);
    }

}
