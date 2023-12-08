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
    <div class="bubble-container">
        <div class="bubble">
            <strong>{{ $avis->utilisateur->name }}</strong> a donné une note de {{ $avis->note }}/10 à {{ $avis->media->titre }}.
            <br>
            <p class="comment-label">Voici son commentaire: "<span class="comment">{{ $avis->contenu_commentaire }}</span>"</p>
            <p class="comment-label">Posté le : {{ date('d/m/Y à H\hi', strtotime($avis->created_at)) }}</p>
        </div>
    </div>
@endforeach


                        <!-- Ajouter un bouton pour rediriger vers la page de création d'avis -->
                        <a href="{{ route('avis.create') }}" class="btn btn-primary mt-3">Ajouter un avis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bubble-container {
            margin-bottom: 15px;
        }

        .bubble {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            position: relative;
        }

        .bubble strong {
            color: #555;
        }

     

        .comment-label {
            margin-bottom: 5px;
        }

        .btn-primary {
            margin-top: 15px;
        }
    </style>
@endsection
