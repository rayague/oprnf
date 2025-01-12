<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Importation de Hash pour comparer le mot de passe

class LoginController extends Controller
{
    // public function login()
    // {
    //     return view("login");
    // }

    public function loginView()
    {
        return view("login");
    }


//     public function handleForm(Request $request)
//     {
//         // Validation du mot de passe
//         $request->validate([
//             'password' => 'required|string|min:8', // Validation basique du mot de passe
//         ]);

//         // Récupérer le mot de passe soumis
//         $password = $request->input('password');

//         // // Vérification du mot de passe pour les utilisateurs 'admin' et 'communes'
//         // $user = User::where('name', 'administrateurs') // Vérification de l'utilisateur admin
//         //             ->orWhere('name', 'communes') // Vérification de l'utilisateur communes
//         //             ->first();

//         // if ($user && Hash::check($password, $user->password)) {
//         //     // Si le mot de passe est valide, redirection en fonction du rôle
//         //     if ($user->name === 'administrateurs') {
//         //         // Redirection vers le tableau de bord admin
//         //         return redirect()->route('admin.dashboard');
//         //     } elseif ($user->name === 'communes') {
//         //         // Redirection vers le tableau de bord des communes
//         //         return redirect()->route('commune.dashboard');
//         //     }
//         // } else {
//         //     // Si le mot de passe est incorrect ou l'utilisateur n'existe pas, afficher un message d'erreur
//         //     return back()->withErrors(['password' => 'Les informations fournies sont incorrectes.']);
//         // }
//         // Vérifier d'abord l'existence de l'utilisateur 'administrateurs'
//         $userAdmin = User::where('name', 'administrateurs')->first();

//         if ($userAdmin && Hash::check($password, $userAdmin->password)) {
//             // Si l'utilisateur 'administrateurs' est trouvé et le mot de passe correspond
//             return redirect()->route('admin.dashboard');
//         }

//         // Vérifier ensuite l'utilisateur 'communes'
//         $userCommunes = User::where('name', 'communes')->first();

//         if ($userCommunes && Hash::check($password, $userCommunes->password)) {
//             // Si l'utilisateur 'communes' est trouvé et le mot de passe correspond
//             return redirect()->route('commune.dashboard');
//         }

// // Si aucun des deux utilisateurs n'a été trouvé ou que le mot de passe est incorrect
// return back()->withErrors(['password' => 'Les informations fournies sont incorrectes.']);

//     }

public function handleForm(Request $request)
{
    // Validation du mot de passe
    $request->validate([
        'password' => 'required|string|min:8', // Validation basique du mot de passe
    ]);

    // Récupérer le mot de passe soumis
    $password = $request->input('password');

    // Vérification du mot de passe pour les utilisateurs 'admin' et 'communes'
    $userAdmin = User::where('name', 'administrateurs')->first();

    if ($userAdmin && Hash::check($password, $userAdmin->password)) {
        // Si l'utilisateur 'administrateurs' est trouvé et le mot de passe correspond
        return redirect()->route('admin.dashboard');
    }

    $userCommunes = User::where('name', 'communes')->first();

    if ($userCommunes && Hash::check($password, $userCommunes->password)) {
        // Si l'utilisateur 'communes' est trouvé et le mot de passe correspond
        return redirect()->route('commune.dashboard');
    }

    // Si l'utilisateur n'est ni 'administrateurs' ni 'communes', vérifie un autre utilisateur
    $userOther = User::where('name', '!=', 'administrateurs') // Ne pas prendre les admins
                    ->where('name', '!=', 'communes') // Ne pas prendre les communes
                    ->whereNotNull('password') // Vérifier que l'utilisateur a un mot de passe
                    ->first(); // Récupère le premier utilisateur qui correspond

    // Si un autre utilisateur existe et que le mot de passe correspond
    if ($userOther && Hash::check($password, $userOther->password)) {
        // Redirection vers le tableau de bord des communes
        return redirect()->route('commune.dashboard');
    }

    // Si aucun des cas ci-dessus n'a fonctionné (mauvais mot de passe ou utilisateur non trouvé)
    return back()->withErrors(['password' => 'Les informations fournies sont incorrectes.']);
}

    public function logout(Request $request)
    {
        // Déconnecte l'utilisateur
        Auth::logout();

        // Redirige l'utilisateur vers la page d'accueil ou une autre page après la déconnexion
        return redirect()->route('loginView');
    }
}