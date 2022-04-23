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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/indentification', function () {
    return view('indentification');
})->name('indentification');

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

Route::get('/demande_intervention', function () {
    return view('demande_intervention');
})->name('demande_intervention');

Route::get('/formulaire_intervention', function () {
    return view('formulaire_intervention');
})->name('formulaire_intervention');

Route::get('/equipes', function () {
    return view('equipes');
})->name('equipes');

Route::get('/materiels', function () {
    return view('materiels');
})->name('materiels');

Route::get('/materiel_details', function () {
    return view('materiel_details');
})->name('materiel_details');

Route::get('/employes', function () {
    return view('employes');
})->name('employes');

Route::get('/devis', function () {
    return view('devis');
})->name('devis');

Route::get('/demandes_etudes', function () {
    return view('demandes_etudes');
})->name('demandes_etudes');

Route::get('/commandes', function () {
    return view('commandes');
})->name('commandes');

Route::get('/commande_details', function () {
    return view('commande_details');
})->name('commande_details');

Route::get('/demande_etude_details', function () {
    return view('demande_etude_details');
})->name('demande_etude_details');

Route::get('/formulaire_devis', function () {
    return view('formulaire_devis');
})->name('formulaire_devis');