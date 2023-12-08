<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Pagination\Paginate;

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

    return redirect('/liste')->with('success', 'Media ajouté avec succès!');
}

}

