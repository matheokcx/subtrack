<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('statiques.accueil');
})->name('accueil');
