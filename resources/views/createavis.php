@extends('master')

@section('content')
    <div class="form-container">
        <form action="{{ route('process-form') }}" method="post">
            @csrf

            <label for="id_media">Medias :</label>
            <select name="id_medias" required>
                @foreach($medias as $medias)
                    <option value="{{ $medias->id }}">{{ $medias->titre }}</option>
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
