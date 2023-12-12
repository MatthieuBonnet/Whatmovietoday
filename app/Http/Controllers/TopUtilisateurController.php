<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Assurez-vous d'importer le modèle User
use Auth;

class TopUtilisateurController extends Controller
{
    public function index()
    {
        // Récupérer les 10 utilisateurs avec le plus grand nombre de médias vus
        $topUsers = User::withCount(['medias' => function ($query) {
            $query->where('vue', 1);
        }])
            ->orderBy('medias_count', 'desc')
            ->take(10)
            ->get();

        // Passe les utilisateurs à la vue
        return view('top-utilisateur', compact('topUsers'));
    }
}
