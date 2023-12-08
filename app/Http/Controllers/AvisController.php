<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;
use App\Models\Media;
use Auth;

class AvisController extends Controller
{
    public function index()
    {
        $avis = Avis::with(['utilisateur', 'media'])->get();
        return view('avis', compact('avis'));
    }
    

    public function createFormAvis()
    {
        $medias = Media::all(); // Récupérez la liste des médias depuis la base de données
        return view('createavis', compact('medias'));
    }

    public function processFormAvis(Request $request)
    {
        $request->validate([
            'id_media' => 'required',
            'contenu_commentaire' => 'required',
            'note' => 'required',
        ]);
    
        // Utilisez le modèle Avis pour créer une nouvelle entrée
        Auth::user()->avis()->create([
            'id_media' => $request->input('id_media'), // Assurez-vous que le nom du champ est correct
            'contenu_commentaire' => $request->input('contenu_commentaire'),
            'note' => $request->input('note'),
        ]);
    
        return redirect('/')->with('success', 'Avis ajouté avec succès!');
    }
}