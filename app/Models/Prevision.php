<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prevision extends Model
{
    use HasFactory;
    protected $fillable = ['fichier', 'observations', 'user_id'];

    /**
     * Relation avec l'utilisateur qui a fait la soumission
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
