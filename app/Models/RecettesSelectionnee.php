<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecettesSelectionnee extends Model
{
    use HasFactory;

    // Les attributs qui peuvent être assignés en masse (évite les erreurs de "mass assignment")
    protected $fillable = ['nom'];

}