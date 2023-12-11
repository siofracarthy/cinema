<?php


use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\FilmController as AdminFilmController;
use App\Http\Controllers\User\FilmController as UserFilmController;
use App\Http\Controllers\User\CompanyController as UserCompanyController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/admin/films', AdminFilmController::class)->middleware(['auth'])->names('admin.films');
    Route::resource('/user/films', UserFilmController::class)->middleware(['auth'])->names('user.films')->only(['index', 'show']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/admin/companies', AdminCompanyController::class)->middleware(['auth'])->names('admin.companies');
    Route::resource('/user/companies', UserCompanyController::class)->middleware(['auth'])->names('user.companies')->only(['index', 'show']);
});

Route::resource('/films', FilmController::class);

require __DIR__.'/auth.php';
