<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'commune',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Il est important de garder cela pour les mots de passe hachés si tu continues à utiliser un mot de passe haché.
        ];
    }

    /**
     * Relation one-to-one avec la table 'user_passwords' (si tu crées une nouvelle table pour stocker les mots de passe).
     */
    public function userPassword()
    {
        return $this->hasOne(UserPassword::class);
    }
}