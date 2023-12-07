<form action="{{ route('process-form') }}" method="post">
    @csrf

    <label for="titre">Titre :</label>
    <input type="text" name="titre" required>
    <br>
    
    <label for="categorie">Catégorie :</label>
    <input type="text" name="categorie" required>
    <br>

    <label for="genre">Genre :</label>
    <input type="text" name="genre" required>
    <br>
    
    <label for="annee_sortie">Année de sortie :</label>
    <input type="number" name="annee_sortie" required>
    <br>

    <label for="duree">Durée :</label>
    <input type="number" name="duree" required>
    <br>


    <button type="submit">Ajouter</button>
</form>
