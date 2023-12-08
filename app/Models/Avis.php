<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Avis extends Model
{
    use HasFactory;

    protected $table = 'avis';

    protected $fillable = [
        'id_media',
        'contenu_commentaire',
        'note',
        'id_utilisateur',
    ];

    public $timestamps = true; // Ajout de la propriété

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'id_media');
    }
}

