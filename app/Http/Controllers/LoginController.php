<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Importation de Hash pour comparer le mot de passe

class LoginController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function handleForm(Request $request)
    {
        // Validation du mot de passe
        $request->validate([
            'password' => 'required|string|min:8', // Validation basique du mot de passe
        ]);

        // Récupérer le mot de passe soumis
        $password = $request->input('password');

        // Vérification du mot de passe pour les utilisateurs 'admin' et 'communes'
        $user = User::where('name', 'administrateurs') // Vérification de l'utilisateur admin
                    ->orWhere('name', 'communes') // Vérification de l'utilisateur communes
                    ->first();

        if ($user && Hash::check($password, $user->password)) {
            // Si le mot de passe est valide, redirection en fonction du rôle
            if ($user->name === 'administrateurs') {
                // Redirection vers le tableau de bord admin
                return redirect()->route('admin.dashboard');
            } elseif ($user->name === 'communes') {
                // Redirection vers le tableau de bord des communes
                return redirect()->route('commune.dashboard');
            }
        } else {
            // Si le mot de passe est incorrect ou l'utilisateur n'existe pas, afficher un message d'erreur
            return back()->withErrors(['password' => 'Le mot de passe est incorrect ou l\'utilisateur n\'existe pas.']);
        }
    }
    public function logout(Request $request)
    {
        // Déconnecte l'utilisateur
        Auth::logout();

        // Redirige l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
        return redirect()->route('login');
    }
}