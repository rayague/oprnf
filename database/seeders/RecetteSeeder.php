<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recettes')->insert([
            ['nom' => 'Droits de timbre'],
            ['nom' => 'Amendes et pénalités'],
            ['nom' => 'Redevances diverses'],
            ['nom' => 'Ventes de biens publics'],
            ['nom' => 'Location de biens de l\'État'],
            ['nom' => 'Contributions volontaires'],
            ['nom' => 'Recettes des activités économiques'],
            ['nom' => 'Amortissement et récupérations'],
        ['nom' => 'Revenus de l\'entreprise et du domaine'],
        ['nom' => 'Produits des unités de production de marchandises'],
        ['nom' => 'Revenus des entreprises'],
        ['nom' => 'Droits et taxes à l\'importation'],
        ['nom' => 'Droits et taxes à l\'exportation'],
        ['nom' => 'Redevances informatiques'],
        ['nom' => 'Autres recettes non fiscales'],
        ['nom' => 'Droits de douane'],
        ['nom' => 'Revenus des concessions'],
        ['nom' => 'Revenus des services publics'],
        ['nom' => 'Revenus des participations financières'],
        ['nom' => 'Revenus des ventes de services'],
        ['nom' => 'Revenus des licences et autorisations'],
        ['nom' => 'Revenus des droits de passage'],
        ['nom' => 'Revenus des services administratifs'],
        ]);
    }
}