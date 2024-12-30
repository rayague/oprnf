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