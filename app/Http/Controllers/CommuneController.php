<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;
use App\Models\RecettesSelectionnee;


class CommuneController extends Controller
{
    public function index()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.index'); // La vue 'commune.dashboard' doit exister
    }

    public function cadrage()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.cadrage'); // La vue 'commune.dashboard' doit exister
    }
    public function hypotheses()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.hypotheses'); // La vue 'commune.dashboard' doit exister
    }
    public function solver()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.solver'); // La vue 'commune.dashboard' doit exister
    }
    public function recettes()
    {
        $recettes = Recette::all();
        $recettesSelectionnees = RecettesSelectionnee::all();
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.recettes', compact('recettes', 'recettesSelectionnees')); // La vue 'commune.dashboard' doit exister
    }
    public function formulaire()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.formulaire'); // La vue 'commune.dashboard' doit exister
    }
    public function historiques()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.historiques'); // La vue 'commune.dashboard' doit exister
    }
}