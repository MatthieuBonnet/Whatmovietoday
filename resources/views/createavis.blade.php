@extends('master')

@section('content')
    <div class="form-container">
        <form action="{{ route('avis.store') }}" method="post">
            @csrf

            <label for="id_media">Medias :</label>
            <!-- Dans votre vue -->
<select name="id_media" required>
    @foreach($medias as $media)
        <option value="{{ $media->id }}">{{ $media->titre }}</option>
    @endforeach
</select>

            <br>

            <label for="contenu_commentaire">Commentaire :</label>
            <input type="text" name="contenu_commentaire" required>
            <br>

            <label for="note">Note :</label>
            <select name="note" required>
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <br>

            <button type="submit" class="button">Ajouter</button>
        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection




<style>
    .form-container {
        width: 400px;
        margin: 100px auto;
        background-color: rgba(40, 12, 0, 0.8);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    label {
        color: #fff;
    }

    input,
    select {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 10px;
        background-color: rgb(221, 153, 179);
        color: #fff;
        cursor: pointer;
    }

    .button:hover {
        background-color: #8b0000;
    }
</style>
