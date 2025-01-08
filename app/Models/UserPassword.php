<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserPassword extends Model
{    protected $fillable = [
    'user_id', // Référence à l'utilisateur
    'password', // Mot de passe en clair
];

// Relation inverse : un mot de passe appartient à un utilisateur
public function user()
{
    return $this->belongsTo(User::class);
}
}