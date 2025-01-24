<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recette;
use App\Models\Prevision;
use Illuminate\Http\Request;
use App\Models\RecettesSelectionnee;
use App\Models\UserPassword;
use Illuminate\Support\Facades\Auth;


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
         // Liste des communes (tu peux les récupérer depuis une base de données)
         $communes = [
             'Abomey', 'Adjarra', 'Agbangnizoun', 'Aplahoué', 'Avrankou', 'Bembèrèkè', 'Bohicon', 'Bantè', 'Banikoara', 'Bèdèkpo',
             'Dassa-Zoumé', 'Djougou', 'Djidja', 'Kandi', 'Kérou', 'Kouandé', 'Kétou', 'Lokossa', 'Malanville', 'Materi', 'Nikki',
             'Ouidah', 'Parakou', 'Pobè', 'Sèmè-Kpodji', 'Sakété', 'Save', 'Tchaourou', 'Toviklin', 'Zagnanado', 'Zè', 'Akpro-Missérété',
             'Allada', 'Anii', 'Atacora', 'Avrankou', 'Bassila', 'Bembérèkè', 'Comè', 'Cotonou', 'Glazoué', 'Houéyogbé', 'Ifangni',
             'Kétou', 'Ouidah', 'Parakou', 'Pobè', 'Sèmè-Kpodji', 'Sakété', 'Save', 'Tchaourou', 'Zagnanado', 'Zè',
             'Bonou', 'Dassa-Zoumé', 'Dangbo', 'Pobè', 'Tori-Bossito', 'Ouèssè', 'Ouèssè', 'Abomey', 'Abomey-Calavi', 'Adjohoun',
             'Akassato', 'Bassila', 'Djougou', 'Matéri', 'Kouandé', 'Natitingou', 'N\'Dali', 'Parakou', 'Savalou', 'Tchaourou', 'Zogbodomè',
             'Zogbodomey', 'Zogbodiomé'
         ];

         // Vérifier si l'ID est valide
         if ($id >= 1 && $id <= count($communes)) {
             $commune = $communes[$id - 1]; // l'index commence à 0, donc on utilise $id - 1
             return view('admin.show', compact('commune')); // Afficher la vue avec le nom de la commune
         }

         // Si l'ID est invalide, afficher une page 404
         abort(404, "Commune non trouvée");
     }

     public function profil()
     {
         $user = Auth::user();
         // Récupérer tous les utilisateurs sauf 'administrateurs' et 'communes'
    $users = UserPassword::where("password")
    ->with('User') // Charger les mots de passe associés
    ->get();
             return view('commune.profil', compact('users', 'user')); // Passer également l'utilisateur à la vue

     }



}