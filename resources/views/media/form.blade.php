@extends('master')
@section('content')
    <div class="form-container">
<form action="{{ route('process-form') }}" method="post">
    @csrf
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required>
        <br>

        <label for="categorie">Catégorie :</label>
        <select name="categorie" class="form-select">
            <option value="1">Action</option>
            <option value="2">Aventure</option>
            <option value="3">Comédie</option>
            <option value="3">Drame</option>
            <option value="3">Horreur</option>
            <option value="3">Science-Fiction</option>
            <option value="3">Fantastique</option>
            <option value="3">Romance</option>
            <option value="3">Documentaire</option>
            <option value="3">Animation</option>
            <option value="3">Thriller</option>
            <option value="3">Crime</option>
            <option value="3">Mystère</option>
            <option value="3">Guerre</option>
            <option value="3">Western</option>
        </select>
        <br>

        <label for="genre">Genre :</label>
        <select name="genre" class="form-select">
            <option value="1">Films</option>
            <option value="2">Series</option>
            <option value="3">Animés</option>
            <option value="3">Dessin-Animé</option>
        </select>
        <br>

        <label for="annee_sortie">Année de sortie :</label>
        <input type="number" name="annee_sortie" required>
        <br>

        <label for="duree">Durée :</label>
        <input type="number" name="duree" required>
        <br>

        <!-- Ajout d'une marge inférieure pour séparer le dernier champ de formulaire du bouton -->
        <div style="margin-bottom: 20px;"></div>

        <button type="submit" class="button">Ajouter</button>
    </div>
</form>
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
