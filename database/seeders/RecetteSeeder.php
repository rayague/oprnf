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
        ]);
    }
}