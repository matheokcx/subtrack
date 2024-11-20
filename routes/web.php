<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('statiques.accueil');
})->name('accueil');

Route::get('/home', function () {
    return view('dashboard', ["titre" => "Subtrack - Home"]);
})->middleware(['auth'])->name('home');

