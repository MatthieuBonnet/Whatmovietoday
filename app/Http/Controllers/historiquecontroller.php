<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class historiquecontroller extends Controller
{
    public function index()
    {
        // Récupère les médias depuis la table media
        
        $medias = Auth::user()->media()->where('vue', 1)->get();

        // Passe les médias à la vue
       
        return view('historique', compact('medias'));
    }

    



   
}