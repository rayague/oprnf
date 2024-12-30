<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }

    public function handleForm(Request $request)
    {
        // Validation du mot de passe
        $password = $request->input('password');

        // Vérification du mot de passe
        if ($password === 'admin01') {
            // Redirection vers la page pour l'admin
            return redirect()->route('admin.dashboard'); // Remplace par la route de l'admin
        } elseif ($password === 'commune') {
            // Redirection vers la page pour la commune
            return redirect()->route('commune.dashboard'); // Remplace par la route de la commune
        } else {
            // Si le mot de passe est incorrect, message d'erreur
            return back()->withErrors(['password' => 'Le mot de passe n\'est pas reconnu.']);
        }
    }
}