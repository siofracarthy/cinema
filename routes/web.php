<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/films',FilmController::class);
Route::get('/films/{film}', [FilmController::class, 'show'])->name('films.show');


Route::get('/', function () {
    return view('welcome');
});


