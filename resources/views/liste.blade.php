<!-- liste.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
    @foreach ($films as $film)
        <tr>
            <td>{{ $film->titre }}</td>
            <td>{{ $film->categorie }}</td>
            <td>{{ $film->genre }}</td>
            <td>{{ $film->annee_sortie }}</td>
            <td>{{ $film->duree }}</td>
            <td>
                <form method="POST" action="{{ url('/listemedia/' . $film->id . '/evue') }}">
                    @csrf
                    @method('PUT')
                    <input type="checkbox" name="vue" onchange="this.form.submit()" {{ $film->vue ? 'checked' : '' }}>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
                </table>
                <a href="{{ route('create-media') }}" class="btn btn-primary">Ajouter un Nouveau Média</a>
            </div>
        </div>
    </div>
@endsection
