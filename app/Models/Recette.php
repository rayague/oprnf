<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'selectionnee'];    //
    protected $casts = [
        'selectionnee' => 'boolean',
    ];
}