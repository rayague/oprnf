<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recette;
use Illuminate\Http\Request;
use App\Models\RecettesSelectionnee;
use Illuminate\Support\Facades\Auth;

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
    public function selectionsView()
    {
        $recettes = Recette::all(); // Si tu veux récupérer toutes les recettes
        $recettesSelectionnees = RecettesSelectionnee::all(); // Si tu as une table qui contient les recettes sélectionnées

        // Assure-toi de passer les deux variables à la vue
        return view('admin.recettesSelectionnee', compact('recettes', 'recettesSelectionnees'));
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

// public function validerRecette(Request $request)
// {
//     // Récupérer les IDs des recettes sélectionnées depuis la requête
//     $selectedRecettes = $request->input('recettes'); // Un tableau des IDs sélectionnés

//     if ($selectedRecettes) {
//         // Étape 1 : Supprimer toutes les anciennes recettes sélectionnées (si nécessaire)
//         // UserRecette::where('user_id', Auth::id())->delete();

//         // Étape 2 : Ajouter les nouvelles recettes sélectionnées (si besoin)
//         foreach ($selectedRecettes as $recetteId) {
//             // Vérifier que tu insères la valeur de 'nom' aussi
//             $recette = Recette::find($recetteId);

//             if ($recette) {
//                 // Insérer la recette dans la table intermédiaire avec la valeur de 'nom'
//                 RecettesSelectionnee::create([
//                     'recette_id' => $recette->id,
//                     'nom' => $recette->nom, // Ajouter 'nom' ici
//                 ]);
//             }
//         }

//         // Étape 3 : Récupérer les recettes correspondantes dans la base de données
//         $recettes = Recette::whereIn('id', $selectedRecettes)->get();

//         // Retourner les recettes sélectionnées à la vue ou rediriger
//         return view('admin.recettes', compact('recettes'))->with('success', 'Recettes validées avec succès!');
//     } else {
//         return back()->with('error', 'Aucune recette sélectionnée.');
//     }
// }



public function validerRecette(Request $request)
{
    // Récupérer les IDs des recettes sélectionnées
    $selectedRecettes = $request->input('recettes'); // Tableau des IDs sélectionnés

    if ($selectedRecettes) {
        // Étape 1 : Supprimer toutes les anciennes recettes dans la table Recette (si nécessaire)
        Recette::truncate(); // ou une autre logique pour supprimer les anciennes recettes (selon ta logique)

        // Étape 2 : Ajouter les nouvelles recettes sélectionnées dans la table Recette
        foreach ($selectedRecettes as $recetteId) {
            // Si tu veux ajouter les recettes dans Recette
            Recette::create(['nom' => RecettesSelectionnee::find($recetteId)->nom]); // Par exemple, on prend le nom de RecettesSelectionnee
        }

        // Étape 3 : Récupérer les recettes correspondantes dans la base de données Recette
        $recettes = Recette::whereIn('id', $selectedRecettes)->get();

        // Retourner les recettes sélectionnées à la vue ou rediriger avec succès
        return view('admin.recettes', compact('recettes'))->with('success', 'Recettes validées avec succès!');
    } else {
        return back()->with('error', 'Aucune recette sélectionnée.');
    }
}


public function show($communeId)
{
    // Liste des communes
    $communes = [
        'Abomey', 'Adjarra', 'Agbangnizoun', 'Aplahoué', 'Avrankou', 'Bembèrèkè',
        'Bohicon', 'Bantè', 'Banikoara', 'Bèdèkpo', 'Dassa-Zoumé', 'Djougou',
        'Djidja', 'Kandi', 'Kérou', 'Kouandé', 'Kétou', 'Lokossa', 'Malanville',
        'Materi', 'Nikki', 'Ouidah', 'Parakou', 'Pobè', 'Sèmè-Kpodji', 'Sakété',
        'Save', 'Tchaourou', 'Toviklin', 'Zagnanado', 'Zè', 'Akpro-Missérété', 'Allada',
        'Anii', 'Atacora', 'Avrankou', 'Bassila', 'Bembérèkè', 'Comè', 'Cotonou',
        'Glazoué', 'Houéyogbé', 'Ifangni', 'Kétou', 'Ouidah', 'Parakou', 'Pobè',
        'Sèmè-Kpodji', 'Sakété', 'Save', 'Tchaourou', 'Zagnanado', 'Zè', 'Bonou',
        'Dassa-Zoumé', 'Dangbo', 'Pobè', 'Tori-Bossito', 'Ouèssè', 'Ouèssè', 'Abomey',
        'Abomey-Calavi', 'Adjohoun', 'Akassato', 'Bassila', 'Djougou', 'Matéri',
        'Kouandé', 'Natitingou', 'N\'Dali', 'Parakou', 'Savalou', 'Tchaourou', 'Zogbodomè',
        'Zogbodomey', 'Zogbodiomé',
    ];

    // Vérifie si l'ID de la commune est valide
    if (!isset($communes[$communeId - 1])) {
        abort(404);  // Si la commune n'existe pas, retourne une erreur 404
    }

    // Récupère le nom de la commune
    $commune = $communes[$communeId - 1];

    // Trouve l'ID de la commune suivante
    $nextCommuneId = $communeId < count($communes) ? $communeId + 1 : null;

    // Retourne la vue avec les variables nécessaires
    return view('admin.affichageCommunes', compact('commune', 'communeId', 'nextCommuneId', 'communes'));
}



}