<!-- liste.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Avis</div>

                    <div class="card-body">
                        @foreach ($avis as $avis)
                            {{ $avis->utilisateur->nom }} a donné une note de {{ $avis->note }} au film {{ $avis->media->titre }}.
                            Commentaire: {{ $avis->contenu_commentaire }}
                        @endforeach

                        <!-- Ajouter un bouton pour rediriger vers la page de création d'avis -->
                        <a href="{{ route('avis.create') }}" class="btn btn-primary">Ajouter un avis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
