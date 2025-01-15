<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function deplacer(Request $request)
{
    $validated = $request->validate([
        'id' => 'required|integer|exists:recettes,id',
        'source' => 'required|string|in:disponible,selectionnee',
        'cible' => 'required|string|in:disponible,selectionnee',
    ]);

    $recette = Recette::find($validated['id']);

    if ($validated['cible'] === 'selectionnee') {
        $recette->selectionnee = true;
    } else {
        $recette->selectionnee = false;
    }

    $recette->save();

    return response()->json(['success' => true]);
}

}