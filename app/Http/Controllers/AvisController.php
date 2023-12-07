<?php

// app/Http/Controllers/AvisController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;
use App\Models\Media;


class AvisController extends Controller
{
    public function index()
    {
        $avis = Avis::with(['utilisateur', 'media'])->get();
        return view('avis', compact('avis'));
    }

    public function create()
{
    // Utilisez la méthode all() sur le modèle Media pour récupérer tous les médias
    $medias = Media::all();
    return view('createavis', compact('medias'));
}

    public function store(Request $request)
    {
        // Validez les données du formulaire ici.

        Avis::create([
            'id_utilisateur' => auth()->user()->id,
            'id_media' => $request->input('id_media'),
            'contenu_commentaire' => $request->input('contenu_commentaire'),
            'note' => $request->input('note'),
        ]);

        return redirect()->route('avis.index');
    }
}