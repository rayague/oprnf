<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recette;
use Illuminate\Http\Request;
use App\Models\RecettesSelectionnee;

class AdminController extends Controller
{
    public function index()
    {
        // Logique pour l'affichage du tableau de bord admin
        return view('admin.index'); // La vue 'admin.dashboard' doit exister
    }

    public function cadrage()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('admin.cadrage'); // La vue 'commune.dashboard' doit exister
    }
    public function hypotheses()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('admin.hypotheses'); // La vue 'commune.dashboard' doit exister
    }
    public function solver()
    {
        // Logique pour l'affichage du tableau de bord commune
        return view('admin.solver'); // La vue 'commune.dashboard' doit exister
    }
    public function recettes()
    {
        $recettes = Recette::all();
        $recettesSelectionnees = RecettesSelectionnee::all();
        return view('admin.recettes', compact('recettes', 'recettesSelectionnees')); // La vue 'commune.dashboard' doit exister
    }

    public function previsions()
    {
        return view('admin.previsions'); // La vue 'commune.dashboard' doit exister
    }

    public function utilisateurs()
    {
        return view('admin.utilisateurs'); // La vue 'commune.dashboard' doit exister
    }

    // public function listeUtilisateurs()
    // {
    //       // Récupérer tous les utilisateurs sauf 'administrateurs' et 'communes'
    //       $users = User::whereNotIn('name', ['administrateurs', 'communes'])->get();
    //     return view('admin.listeUtilisateurs', compact('users')); // La vue 'commune.dashboard' doit exister
    // }

    public function listeUtilisateurs()
{
    // Récupérer tous les utilisateurs sauf 'administrateurs' et 'communes'
    $users = User::whereNotIn('name', ['administrateurs', 'communes'])
                  ->with('userPassword') // Charger les mots de passe associés
                  ->get();

    return view('admin.listeUtilisateurs', compact('users'));
}
}