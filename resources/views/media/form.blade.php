<form action="{{ route('process-form') }}" method="post">
    @csrf
    <label for="titre">Titre :</label>
    <input type="text" name="titre" required>
    <br>


    <label for="categorie">Catégorie :</label>
    <select name ="categorie" class="form-select" >
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
    <select name ="genre" class="form-select" >
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


    <button type="submit">Ajouter</button>
</form>