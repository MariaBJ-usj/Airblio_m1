<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/demande_intervention', function () {
    return view('demande_intervention');
})->name('demande_intervention');

Route::get('/equipes', function () {
    return view('equipes');
})->name('equipes');
