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
            <option value="Action">Action</option>
            <option value="Aventure">Aventure</option>
            <option value="Comédie">Comédie</option>
            <option value="Drame">Drame</option>
            <option value="Horreur">Horreur</option>
            <option value="Science-Fiction">Science-Fiction</option>
            <option value="Fantastique">Fantastique</option>
            <option value="Romance">Romance</option>
            <option value="Documentaire">Documentaire</option>
            <option value="Animation">Animation</option>
            <option value="Thriller">Thriller</option>
            <option value="Crime">Crime</option>
            <option value="Mystère">Mystère</option>
            <option value="Guerre">Guerre</option>
            <option value="Western">Western</option>
        </select>
        <br>

        <label for="genre">Genre :</label>
        <select name="genre" class="form-select">
            <option value="Films">Films</option>
            <option value="Series">Series</option>
            <option value="Animés">Animés</option>
            <option value="Dessin-Animé">Dessin-Animé</option>
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
