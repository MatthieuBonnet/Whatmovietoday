<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListeMedia;
use App\Models\Historique;






class ListeController extends Controller
{

    public function index()
    {
        $films = ListeMedia::all();
        return view('liste')->with('films', $films);
    }


public function marquerCommeVu($id)
{
    $film = ListeMedia::findOrFail($id);

    // Mettez à jour l'état "vu" dans la liste principale
    $film->update(['vu' => true]);

    // Déplacez le film vers la liste historique
    Historique::create([
        'id_utilisateur' => auth()->id(),
        'id_media' => $film->id_media,
        'date_heure' => now(),
    ]);

    return redirect()->back()->with('success', 'Film marqué comme vu et déplacé vers la liste historique.');
}
}