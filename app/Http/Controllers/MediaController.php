<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function createForm()
    {
        return view('media.form');
    }

// Exemple dans le contrôleur MediaController
public function processForm(Request $request)
{
    $request->validate([
        'titre' => 'required',
        'categorie' => 'required',
        'genre' => 'required',
        'duree' => 'required',
        'annee_sortie' => 'nullable|integer', // Ajoutez la règle nullable
    ]);
    // Utilisation du modèle Media pour créer une nouvelle entrée
    Media::create([
        'titre' => $request->input('titre'),
        'categorie' => $request->input('categorie'),
        'genre' => $request->input('genre'),
        'annee_sortie' => $request->input('annee_sortie'),
        'duree' => $request->input('duree'),
    ]);

    return redirect('/')->with('success', 'Media ajouté avec succès!');
}
public function mediaList()
{
    $mediaList = auth()->user()->mediaList;

    // Récupérez le média ajouté (s'il y en a un) de la session
    $addedMedia = session('media_added');

    return view('media.list', compact('mediaList', 'addedMedia'));
}
public function addMedia(Request $request)
{
    $user = auth()->user();
    
    // Créez un nouveau média associé à l'utilisateur connecté
    $media = $user->mediaList()->create(['title' => $request->input('title')]);

    // Redirigez l'utilisateur vers la liste de médias mise à jour
    return redirect()->route('media.list')->with('media_added', $media);
}


}

