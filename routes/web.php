<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\PrevisionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/cadrage', [AdminController::class,'cadrage'])->name('admin.cadrage');
    Route::get('/admin/hypotheses', [AdminController::class,'hypotheses'])->name('admin.hypotheses');
    Route::get('/admin/solver', [AdminController::class,'solver'])->name('admin.solver');
    Route::get('/admin/recettes', [AdminController::class,'recettes'])->name('admin.recettes');
    Route::get('/admin/previsions', [AdminController::class,'previsions'])->name('admin.previsions');
    Route::get('/admin/utilisateurs', [AdminController::class,'utilisateurs'])->name('admin.utilisateurs');
    Route::get('/admin/liste', [AdminController::class,'listeUtilisateurs'])->name('listeUtilisateurs');
    Route::post('/valider-recette', [AdminController::class, 'validerRecette'])->name('validerRecette');    // Route::get('/commune/{id}', [CommuneController::class, 'show'])->name('commune.show');
    Route::get('/selections-recettes', [AdminController::class, 'selectionsView'])->name('selectionsView');    // Route::get('/commune/{id}', [CommuneController::class, 'show'])->name('commune.show');


    // Routes de la commune
    Route::get('/commune/dashboard', [CommuneController::class, 'index'])->name('commune.dashboard');
    Route::get('/cadrage', [CommuneController::class,'cadrage'])->name('cadrage');
    Route::get('/hypotheses', [CommuneController::class,'hypotheses'])->name('hypotheses');
    Route::get('/solver', [CommuneController::class,'solver'])->name('solver');
    Route::get('/recettes', [CommuneController::class,'recettes'])->name('recettes');
    Route::get('/formulaire', [CommuneController::class,'formulaire'])->name('formulaire');
    Route::get('/historiques', [CommuneController::class,'historiques'])->name('historiques');
    Route::get('/profil', [CommuneController::class,'profil'])->name('profil');
    Route::get('/retourFiscal', [CommuneController::class,'retourFiscal'])->name('retourFiscal');
    Route::put('/password/update', [CommuneController::class, 'update'])->name('updatePassword');


});

// Route de déconnexion
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Route::get('/login', [LoginController::class, 'login'])->name('login'); // Route pour afficher le formulaire
Route::get('/loginView', [LoginController::class, 'loginView'])->name('loginView'); // Route pour afficher le formulaire
// Route::get('/loginCon', [LoginController::class, 'loginCon'])->name('loginCon'); // Route pour afficher le formulaire
Route::post('/loginCon', [LoginController::class, 'handleForm'])->name('loginCon');; //

Route::post('/previsions', [PrevisionController::class, 'store'])->name('previsions.store');






Route::get('/communes-users/create', [UserController::class, 'create'])->name('createCommunesUsers');

// Route pour traiter le formulaire de soumission
Route::post('/communes-users', [UserController::class, 'store'])->name('storeCommunesUsers');

Route::post('/recettes/deplacer', [RecetteController::class, 'deplacer'])->name('recettes.deplacer');


require __DIR__.'/auth.php';