<?php

// app/Models/Avis.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['id_utilisateur', 'id_media', 'contenu_commentaire', 'note'];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'id_media');
    }
}
