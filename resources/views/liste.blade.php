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

            @if ($medias->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-header">
                            <tr>
                                <th class="header-row" scope='col'>Vu ?</th>
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
                                        <form method="POST" action="{{ url('/listemedia/' . $media->id . '/update-vue') }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="checkbox" name="vue" class="check-vue" onchange="this.form.submit()" {{ $media->vue ? 'checked' : '' }}>
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
                </div>
            @else
                <p>Aucun média créé.</p>
            @endif

            <a href="{{ route('create-media') }}" class="btn btn-outline-light ">Ajouter un Nouveau Média</a>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<style>
    .table-responsive {
        overflow-x: auto;
    }

    .custom-table-body {
        background-color: #fff; /* Fond blanc */
    }

    .table-header {
        background-color: rgba(128, 128, 128, 0.8); /* Gris avec transparence */
        color: #fff; /* Texte blanc */
    }

    .header-row {
        background-color: #000; /* Fond noir */
        color: #fff; /* Texte blanc */
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #000; /* Couleur des bordures noires */
    }
</style>
@endsection
