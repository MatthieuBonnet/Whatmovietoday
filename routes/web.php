<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\historiquecontroller;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TopUtilisateurController;
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

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes nécessitant une authentification
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
    Route::get('/welcome', function () {
        dd('Bienvenue');
        return view('welcome');
    })->name('welcome');
    

    // Autres routes nécessitant une authentification
    Route::get('/liste', [ListeController::class, 'index'])->name('liste');
    Route::get('/historique', [historiquecontroller::class, 'index'])->name('historique');
    Route::get('/avis', [aviscontroller::class, 'index'])->name('avis');
    Route::view('/apropos', 'apropos');
    Route::view('/contact', 'contact');
    
    // routes/web.php


Route::post('/avis/store', [AvisController::class, 'store'])->name('avis.store');

// ...

Route::get('/avis/create', [AvisController::class, 'createFormAvis'])->name('avis.create');
Route::post('/avis/store', [AvisController::class, 'processFormAvis'])->name('avis.store');

// ...


    Route::get('/form', [MediaController::class, 'createForm'])->name('create-media');
    Route::post('/process-form', [MediaController::class, 'processForm'])->name('process-form');
    Route::put('/listemedia/{id}/update-vue', [ListeController::class, 'updateVue']);
    // routes/web.php


    Route::get('/top-utilisateur', [TopUtilisateurController::class, 'index'])->name('top-utilisateur');





    


    // La route de bienvenue après la connexion
    Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');
});
