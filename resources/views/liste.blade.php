@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if (session('newMedia'))
                    <div class="alert alert-info">
                        Nouveau Média ajouté :
                        {{ session('newMedia')->titre }} -
                        Catégorie: {{ session('newMedia')->categorie }} -
                        Genre: {{ session('newMedia')->genre }} -
                        Année de sortie: {{ session('newMedia')->annee_sortie }} -
                        Durée: {{ session('newMedia')->duree }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="header-row" scope='col'>Vu ?</th> <!-- Ajout d'une colonne pour les actions -->
                                <th class="header-row" scope='col'>Titre</th>
                                <th class="header-row" scope='col'>Catégorie</th>
                                <th class="header-row" scope='col'>Genre</th>
                                <th class="header-row" scope='col'>Année de sortie</th>
                                <th class="header-row" scope='col'>Durée</th>
                            </tr>
                        </thead>
                        <tbody class="custom-table-body">
                            @foreach ($medias as $media)
                                <tr>
                                    <td>
                                        <form method="POST" action="{{ url('/listemedia/' . $media->id . '/historique') }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="checkbox" name="vue" onchange="this.form.submit()" {{ $media->vu ? 'checked' : '' }}>
                                        </form>
                                    </td>
                                    <td>{{ $media->titre }}</td>
                                    <td>{{ $media->categorie }}</td>
                                    <td>{{ $media->genre }}</td>
                                    <td>{{ $media->annee_sortie }}</td>
                                    <td>{{ $media->duree }} min</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    {{ $medias->links() }}
                    <a href="{{ route('create-media') }}" class="btn btn-outline-light">Ajouter un Nouveau Média</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table-responsive {
            overflow-x: auto;
        }
        .custom-table-body {
            background-color: rgba(169, 169, 169, 0.8);
        }
        .header-row {
            background-color: rgba(169, 169, 169); /* Ajoute un fond gris avec une opacité de 50% */
        }
    </style>
@endsection
