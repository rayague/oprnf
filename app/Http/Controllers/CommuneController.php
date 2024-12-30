<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function index()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.index'); // La vue 'commune.dashboard' doit exister
    }
}