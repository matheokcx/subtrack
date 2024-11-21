<?php

use App\Http\Controllers\AbonnementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('statiques.accueil');
})->name('accueil');

Route::get('/home', [AbonnementController::class, "index"])->middleware(['auth'])->name('home');

