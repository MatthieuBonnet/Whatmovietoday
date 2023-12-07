<form action="{{ route('process-form') }}" method="post">
    @csrf

    <div class="mb-3">
    <label for="titre" class="form-label">Titre :</label>
    <input type="titre" class="form-control" id="titre"></div>
  </div>
   
  <div class="mb-3">
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
</div>
<div class="mb-3">
    <label for="genre">Genre :</label>
  <select name ="genre" class="form-select" >
  <option value="1">Films</option>
  <option value="2">Series</option>
  <option value="3">Animés</option>
  <option value="3">Dessin-Animé</option>

</select>
</div>

  <div class="mb-3">
    <label for="annee_sortie" class="form-label">Année de sortie :</label>
    <input type="annee_sortie" class="form-control" id="annee_sortie">
  </div>
  <div class="mb-3">
    <label for="duree" class="form-label">Durée :</label>
    <input type="duree" class="form-control" id="duree">
  </div>
  <button type="submit">Ajouter à ma liste</button>
</form>

