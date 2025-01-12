<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('dashboard', absolute: false));
    // }

    // /**
    //  * Destroy an authenticated session.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }

    public function store(Request $request): RedirectResponse
    {
        // Validation du mot de passe
        $request->validate([
            'password' => 'required|string|min:8', // Validation du mot de passe (par exemple longueur minimale)
        ]);

        // Récupérer le mot de passe soumis
        $password = $request->input('password');

        // Vérification du mot de passe pour l'utilisateur 'administrateurs'
        $userAdmin = User::where('name', 'administrateurs')->first();
        if ($userAdmin && Hash::check($password, $userAdmin->password)) {
            Auth::login($userAdmin); // Connecte l'utilisateur admin
            return redirect()->route('admin.dashboard'); // Redirection vers le tableau de bord de l'admin
        }

        // Vérification du mot de passe pour l'utilisateur 'communes'
        $userCommunes = User::where('name', 'communes')->first();
        if ($userCommunes && Hash::check($password, $userCommunes->password)) {
            Auth::login($userCommunes); // Connecte l'utilisateur des communes
            return redirect()->route('commune.dashboard'); // Redirection vers le tableau de bord des communes
        }

        // Récupérer tous les utilisateurs sauf 'administrateurs' et 'communes' et ayant un mot de passe
        $usersOther = User::where('name', '!=', 'administrateurs')
        ->where('name', '!=', 'communes')
        ->whereNotNull('password') // Vérifier qu'il y a un mot de passe
        ->get(); // Récupère tous les utilisateurs

        // Vérification du mot de passe pour chaque utilisateur
        foreach ($usersOther as $userOther) {
        if (Hash::check($request->input('password'), $userOther->password)) {
        // Si le mot de passe correspond à l'utilisateur, on le connecte
        Auth::login($userOther);
        return redirect()->route('commune.dashboard'); // Rediriger vers le tableau de bord des communes
        }
        }

        // Si aucun utilisateur ne correspond, afficher une erreur
        return back()->withErrors(['password' => 'Les informations fournies sont incorrectes.']);

            }




    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/loginView');
    }
}
