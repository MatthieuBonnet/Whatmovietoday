<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\avis;

class Media extends Model
{
    public function owner()
{
    return $this->belongsTo(User::class, 'user_id');
}
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = [
        'titre',
        'categorie',
        'genre',
        'duree',
        'annee_sortie',
    ];
}

