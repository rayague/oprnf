<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Prevision;
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
        $previsions = Prevision::where('user_id', auth()->id()) // Filtrer les prévisions par utilisateur
        ->orderBy('created_at', 'desc') // Trier par date de soumission (de la plus récente à la plus ancienne)
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

    // public function show($id)
    // {
    //     // Liste des communes
    //     $communes = [
    //         'Abomey', 'Adjarra', 'Agbangnizoun', 'Aplahoué', 'Avrankou', 'Bembèrèkè', 'Bohicon', 'Bantè', 'Banikoara', 'Bèdèkpo',
    //         'Dassa-Zoumé', 'Djougou', 'Djidja', 'Kandi', 'Kérou', 'Kouandé', 'Kétou', 'Lokossa', 'Malanville', 'Materi', 'Nikki',
    //         'Ouidah', 'Parakou', 'Pobè', 'Sèmè-Kpodji', 'Sakété', 'Save', 'Tchaourou', 'Toviklin', 'Zagnanado', 'Zè', 'Akpro-Missérété',
    //         'Allada', 'Anii', 'Atacora', 'Avrankou', 'Bassila', 'Bembèrèkè', 'Comè', 'Cotonou', 'Glazoué', 'Houéyogbé', 'Ifangni',
    //         'Kétou', 'Ouidah', 'Parakou', 'Pobè', 'Sèmè-Kpodji', 'Sakété', 'Save', 'Tchaourou', 'Zagnanado', 'Zè',
    //         'Bonou', 'Dassa-Zoumé', 'Dangbo', 'Pobè', 'Tori-Bossito', 'Ouèssè', 'Ouèssè', 'Abomey', 'Abomey-Calavi', 'Adjohoun',
    //         'Akassato', 'Bassila', 'Djougou', 'Matéri', 'Kouandé', 'Natitingou', 'N\'Dali', 'Parakou', 'Savalou', 'Tchaourou', 'Zogbodomè',
    //         'Zogbodomey', 'Zogbodiomé'
    //     ];

    //     // Vérifier si l'ID est valide
    //     if ($id >= 1 && $id <= count($communes)) {
    //         $commune = $communes[$id - 1]; // l'index commence à 0, donc on utilise $id - 1

    //         // Récupérer les prévisions pour la commune de l'utilisateur connecté
    //         $previsions = Prevision::where('commune', $commune) // Assurez-vous que le champ 'commune' existe dans la table Previsions
    //                                 ->where('user_id', auth()->id()) // Associer la prévision à l'utilisateur connecté
    //                                 ->get();

    //         // Si aucune prévision n'est trouvée, nous afficherons un message d'absence
    //         if ($previsions->isEmpty()) {
    //             $message = "Aucune prévision trouvée pour la commune de $commune.";
    //         } else {
    //             $message = null; // Pas de message si des prévisions sont trouvées
    //         }

    //         // Vous pouvez définir des informations supplémentaires pour chaque commune ici
    //         $communeDetails = [
    //             'Abomey' => 'Abomey est une commune historique située dans le centre du Bénin...',
    //             'Adjarra' => 'Adjarra est une petite commune connue pour son marché...',
    //             // Ajouter des descriptions ou autres informations spécifiques à chaque commune
    //         ];

    //         // Fournir la description de la commune (si disponible)
    //         $details = $communeDetails[$commune] ?? 'Description non disponible';

    //         // Passer les données à la vue
    //         return view('admin.show', compact('commune', 'details', 'previsions', 'message'));
    //     }

    //     // Si l'ID est invalide, afficher une page 404
    //     abort(404, "Commune non trouvée");
    // }


}