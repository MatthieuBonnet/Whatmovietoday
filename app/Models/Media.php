<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\avis;

class Media extends Model
{
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = [
        'titre',
        'categorie',
        'genre',
        'duree',
        'annee_sortie',
        'vue'
    ];
}

