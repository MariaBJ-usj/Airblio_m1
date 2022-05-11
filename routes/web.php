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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/demande_intervention', function () {
    return view('demande_intervention');
})->name('demande_intervention');

Route::post('/demande_intervention', function () {
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

Route::post('/commandes', function () {
    return view('commandes');
});

Route::get('/commande_details/{id}', function ($id) {
    return view('commande_details', ['id' => $id]);
})->name('commande_details');

Route::post('/commande_details/{id}', function ($id) {
    return view('commande_details', ['id' => $id]);
})->name('commande_details_post');

Route::get('/demande_etude_details/{id}', function ($id) {
    return view('demande_etude_details', ['id' => $id]);
})->name('demande_etude_details');

Route::post('/demande_etude_details/{id}', function ($id) {
    return view('demande_etude_details', ['id' => $id]);
})->name('demande_etude_details_post');

Route::get('/formulaire_intervention/{id}', function ($id) {
    return view('formulaire_intervention', ['id' => $id]);
})->name('formulaire_intervention');

Route::post('/formulaire_intervention/{id}', function ($id) {
    return view('formulaire_intervention', ['id' => $id]);
})->name('formulaire_intervention_post');

Route::get('/formulaire_devis/{id}', function ($id) {
    return view('formulaire_devis', ['id' => $id]);
})->name('formulaire_devis');

Route::get('/interventions', function () {
    return view('interventions');
})->name('interventions');

Route::get('/fiche_intervention/{id}', function ($id) {
    return view('fiche_intervention', ['id' => $id]);
})->name('fiche_intervention');