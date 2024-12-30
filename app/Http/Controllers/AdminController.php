<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Logique pour l'affichage du tableau de bord admin
        return view('admin.index'); // La vue 'admin.dashboard' doit exister
    }
}