<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Recette;
use App\Models\Prevision;
use App\Models\UserPassword;
use Illuminate\Http\Request;
use App\Models\RecettesSelectionnee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
        // $previsions = Prevision::where('user_id', auth()->id()) // Filtrer les prévisions par utilisateur
        // ->orderBy('created_at', 'desc') // Trier par date de soumission (de la plus récente à la plus ancienne)
        // ->get();
        $previsions = Prevision::where('user_id', Auth::id())
    ->orderBy('created_at', 'desc')
    ->get();
        // Logique pour l'affichage du tableau de bord commune
        return view('commune.historiques', compact('previsions')); // La vue 'commune.dashboard' doit exister
    }


    //  Afficher les informations de la commune par son ID
     public function show($id)
     {

     }

     public function profil()
     {
         // Récupérer l'utilisateur actuellement connecté
         $user = Auth::user(); // Cela récupère l'utilisateur authentifié

         // Vérifier si l'utilisateur est authentifié
             // Récupérer l'ID de l'utilisateur connecté
             $userId = $user->id;

             // Chercher le mot de passe associé à cet utilisateur dans la table `user_passwords`
             $userPassword = UserPassword::where('user_id', $userId)->first();

             // Passer l'utilisateur et le mot de passe récupéré à la vue
             return view('commune.profil', compact('userPassword', 'user')); // La vue 'commune.profil' va recevoir ces données

     }
     public function retourFiscal()
     {
         // Logique pour l'affichage du tableau de bord commune
         return view('commune.retourFiscal'); // La vue 'commune.dashboard' doit exister
     }


     public function update(Request $request)
     {
         // Validation des champs du formulaire
         $request->validate([
             'current_password' => 'required|string',
             'new_password' => 'required|string|min:8|confirmed', // Minimum 8 caractères et confirmation
         ]);

         // Récupérer l'utilisateur connecté
         $user = Auth::user();  // Cela récupère l'utilisateur authentifié

         // Vérifier si l'utilisateur est authentifié
         if (!$user) {
             return redirect()->route('login')->withErrors(['error' => 'Utilisateur non authentifié']);
         }

         // Vérifier si l'ancien mot de passe est correct
         if (!Hash::check($request->current_password, $user->password)) {
             return redirect()->back()->withErrors(['current_password' => 'L\'ancien mot de passe est incorrect.']);
         }

         // Hacher le nouveau mot de passe
         $newPassword = Hash::make($request->new_password);

         // 1. Mettre à jour le mot de passe dans la table 'users'
         $user->password = $newPassword;
         $user->save();  // Sauvegarder les changements dans 'users'

         // 2. Mettre à jour le mot de passe dans la table 'user_passwords'
         // Vérifier si une entrée existe pour cet utilisateur dans 'user_passwords'
         $userPassword = UserPassword::where('user_id', $user->id)->first();

         if ($userPassword) {
             // Si l'entrée existe, mettre à jour le mot de passe dans 'user_passwords'
             $userPassword->password = $request->new_password; // Mot de passe en clair (attention au stockage en clair)
             $userPassword->save();  // Sauvegarder les changements dans 'user_passwords'
         } else {
             // Si l'entrée n'existe pas, créer une nouvelle entrée dans 'user_passwords'
             UserPassword::create([
                 'user_id' => $user->id,
                 'password' => $request->new_password, // Stocker le mot de passe en clair
             ]);
         }

         // Rediriger avec un message de succès
         return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès.');
     }







}