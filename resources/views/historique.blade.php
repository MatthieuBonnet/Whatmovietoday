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

                <table class="table">
                    <thead>
                        <tr>
                            <th scope='col'>Titre</th>
                            <th scope='col'>Catégorie</th>
                            <th scope='col'>Genre</th>
                            <th scope='col'>Année de sortie</th>
                            <th scope='col'>Durée</th>
                            <th scope='col'>Actions</th> <!-- Ajout d'une colonne pour les actions -->
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


