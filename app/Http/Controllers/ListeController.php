<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;  // Assure-toi d'importer le modèle Media

class ListeController extends Controller
{
    public function index()
    {
        // Récupère les médias depuis la table media
        $medias = Media::paginate(10);

        // Passe les médias à la vue
        return view('liste')->with('medias', $medias);
    }
    



    public function marquerCommeVu($id)
    {
        $media = ListeMedia::findOrFail($id);

        // Met à jour l'état "vu" dans la liste principale
        $media->update(['vu' => true]);

        // Déplace le média vers la liste historique
        Historique::create([
            'id_utilisateur' => Auth::id(),  // Utilise Auth::id() pour obtenir l'ID de l'utilisateur authentifié
            'id_media' => $media->id_media,
            'date_heure' => now(),
        ]);

        // Supprime le média de la liste principale
        $media->delete();

        return redirect()->back()->with('success', 'Média marqué comme vu et déplacé vers la liste historique.');
    }
}