<!-- resources/views/avis/create.blade.php -->

<form method="post" action="{{ route('avis.store') }}">
    @csrf
    <label for="id_media">Titre du film:</label>
    <select name="id_media" id="id_media">
        @foreach ($medias as $media)
            <option value="{{ $media->id }}">{{ $media->titre }}</option>
        @endforeach
    </select>

    <label for="contenu_commentaire">Commentaire:</label>
    <textarea name="contenu_commentaire" id="contenu_commentaire"></textarea>

    <label for="note">Note (de 1 à 10):</label>
    <input type="number" name="note" id="note" min="1" max="10">

    <button type="submit">Ajouter un avis</button>
</form>
