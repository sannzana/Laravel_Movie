<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;



// Then update the route to use the 'home' method
Route::get('/', [PageController::class, 'home']);








//Route::get('/movies/create', [FirstController::class, 'create'])->name('movies.create');
//Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
////later added might delete
//Route::get('/movieslist', [MovieController::class, 'index'])->name('movies.movieinfo');





//Route::get('/l', function () {
//    return view('header');
//});

