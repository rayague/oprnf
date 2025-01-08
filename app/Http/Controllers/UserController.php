<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create()
    {
        return view('admin.utilisateurs');
    }
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255', // Validation du nom
            'commune' => 'required|unique:users,commune', // Validation de la commune
            'password' => 'required|string|max:255', // Validation du mot de passe
        ]);

        // Création d'un nouvel utilisateur
        $user = new User();
        $user->name = $request->input('name');
        $user->commune = $request->input('commune');
        $user->password = Hash::make($request->input('password')); // Le mot de passe sera haché ici (si tu veux le stocker en clair, enlève cette ligne)
        $user->save();

        // Stocker le mot de passe en clair dans la table `user_passwords`
        $userPassword = new UserPassword();
        $userPassword->user_id = $user->id;
        $userPassword->password = $request->input('password'); // Mot de passe en clair
        $userPassword->save();

        // Redirection avec un message de succès
        return redirect()->route('createCommunesUsers')->with('success', 'Utilisateur créé avec succès');
    }

}