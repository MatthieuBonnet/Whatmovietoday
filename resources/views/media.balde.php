<!-- ajouter_media.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un Nouveau Média</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('media.store') }}">
                            @csrf

                            <label for="titre">Titre:</label>
                            <input type="text" name="titre" required>

                            <label for="categorie">Catégorie:</label>
                            <input type="text" name="categorie" required>

                            <label for="genre">Genre:</label>
                            <input type="text" name="genre" required>

                            <label for="annee_sortie">Année de sortie:</label>
                            <input type="number" name="annee_sortie" required>

                            <label for="duree">Durée (en minutes):</label>
                            <input type="number" name="duree" required>

                            <button type="submit">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
