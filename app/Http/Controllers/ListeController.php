<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;  // Assure-toi d'importer le modèle Media
use Auth;
use Illuminate\Support\Facades\Redirect;

class ListeController extends Controller


{
    public function index(Request $request)
    {
        $categories = Media::distinct('categorie')->pluck('categorie');
    
        $selectedCategory = $request->input('categorie');
    
        $medias = Auth::user()->media()
            ->when($selectedCategory, function ($query) use ($selectedCategory) {
                return $query->where('categorie', $selectedCategory);
            })
            ->where('vue', 0)
            ->get();
    
        return view('liste', compact('medias', 'categories', 'selectedCategory'));
    }

    



    public function updateVue(Request $request, $id)
    {
        $media = Media::findOrFail($id);

        // Incrémente la valeur de 'vu' de 1
        $media->increment('vue');

        // Retourne une redirection vers la page de liste avec un message de succès
        return redirect()->route('liste')->with('success', 'Média ajouté à l\'historique  avec succès !');
    }
}