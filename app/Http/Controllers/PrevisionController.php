<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prevision;
use Illuminate\Support\Facades\Auth;

class PrevisionController extends Controller
{
     /**
     * Store a newly created prevision in the database.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'fichier' => 'required|file|mimes:jpeg,png,pdf|max:10048', // Validation du fichier
            'observations' => 'required|string|max:255', // Validation des observations
        ]);

        // Gérer l'upload du fichier
        $file = $request->file('fichier');
        $filePath = $file->store('previsions', 'public'); // Enregistrer le fichier dans le dossier 'previsions' du dossier public

        // Créer la prévision dans la base de données
        Prevision::create([
            'fichier' => $filePath, // Chemin du fichier
            'observations' => $request->input('observations'), // Observations
            'user_id' => Auth::id(), // ID de l'utilisateur connecté
        ]);

        // Retourner un message de succès ou rediriger
        return back()->with('status', 'Prévision soumise avec succès!');
    }
}