<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommuneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/submit', [LoginController::class, 'handleForm']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/commune/dashboard', [CommuneController::class, 'index'])->name('commune.dashboard');

Route::get('/cadrage', [CommuneController::class,'cadrage'])->name('cadrage');
Route::get('/hypotheses', [CommuneController::class,'hypotheses'])->name('hypotheses');
Route::get('/solver', [CommuneController::class,'solver'])->name('solver');
Route::get('/recettes', [CommuneController::class,'recettes'])->name('recettes');
Route::get('/formulaire', [CommuneController::class,'formulaire'])->name('formulaire');
Route::get('/historiques', [CommuneController::class,'historiques'])->name('historiques');

Route::get('/admin/cadrage', [AdminController::class,'cadrage'])->name('admin.cadrage');
Route::get('/admin/hypotheses', [AdminController::class,'hypotheses'])->name('admin.hypotheses');
Route::get('/admin/solver', [AdminController::class,'solver'])->name('admin.solver');
Route::get('/admin/recettes', [AdminController::class,'recettes'])->name('admin.recettes');
Route::get('/admin/previsions', [AdminController::class,'previsions'])->name('admin.previsions');