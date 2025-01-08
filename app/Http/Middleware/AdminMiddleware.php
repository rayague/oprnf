<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est connecté
        if (!Auth::check()) {
            // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
            return redirect()->route('login');
        }

        // Si l'utilisateur est connecté, continue l'exécution
        return $next($request);
    }
}