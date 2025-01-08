<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Importer Hash pour hacher les mots de passe

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed un utilisateur de test (comme déjà présent)
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Créer l'utilisateur admin avec un mot de passe haché
        User::create([
            'name' => 'administrateurs',
            'password' => Hash::make('adminpassword'), // Le mot de passe sécurisé
            'commune' => 'adminCommune', // Ajoutez ici la valeur pour commune
        ]);
        // Créer l'utilisateur communes avec un mot de passe haché
        User::create([
            'name' => 'communes',
            'password' => Hash::make('communespassword'), // Le mot de passe sécurisé
            'commune' => 'utilisateurCommune' // Ajoutez ici la valeur pour commune
        ]);

        // Appel des autres seeders comme prévu
        $this->call(RecetteSeeder::class);
        $this->call(RecettesSelectionneesSeeder::class);
    }
}