<!-- liste.blade.php -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@extends('master')

@section('content')
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information Importante !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de votre fenêtre modale -->
                <p>Bienvenue dans la section des avis. Vous êtes prié(e) de rester courtois(e) et correct(e) dans vos commentaires</p>
                <p>Nous vous remercions de votre compréhension.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">j'accepte</button>
                <!-- Autres boutons si nécessaire -->
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Avis</div>

                    <div class="card-body">
                    @foreach ($avis as $avis)
    <div class="bubble-container">
        <div class="bubble">
            <strong>{{ $avis->utilisateur->name }}</strong> a donné une note de {{ $avis->note }}/10 à {{ $avis->media->titre }}.
            <br>
            <p class="comment-label">Voici son commentaire: "<span class="comment">{{ $avis->contenu_commentaire }}</span>"</p>
            <p class="comment-label">Posté le : {{ date('d/m/Y à H\hi', strtotime($avis->created_at)) }}</p>
        </div>
    </div>
@endforeach


                        <!-- Ajouter un bouton pour rediriger vers la page de création d'avis -->
                        <a href="{{ route('avis.create') }}" class="btn btn-primary mt-3">Ajouter un avis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bubble-container {
            margin-bottom: 15px;
        }

        .bubble {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            position: relative;
        }

        .bubble strong {
            color: #555;
        }

     

        .comment-label {
            margin-bottom: 5px;
        }

        .btn-primary {
            margin-top: 15px;
        }
    </style>
 <script>
document.addEventListener("DOMContentLoaded", function() {
    // Vérifiez si le cookie a été défini
    if (document.cookie.indexOf("avisModalDisplayed=true") === -1) {
        // Si le cookie n'existe pas, affichez la fenêtre modale
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.show();

        // Définissez le cookie pour indiquer que la fenêtre modale a été affichée
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + (5 * 60 * 1000)); // 5 minutes
        document.cookie = "avisModalDisplayed=true; expires=" + expirationDate.toUTCString();
    } else {
        // Si le cookie existe, vérifiez le temps écoulé depuis la dernière fois que la fenêtre modale a été affichée
        var lastModalTime = new Date(document.cookie.replace(/(?:(?:^|.*;\s*)avisModalDisplayed\s*=\s*([^;]*).*$)|^.*$/, "$1"));

        // Si la période de 5 minutes n'est pas écoulée, ne montrez pas la fenêtre modale
        if (new Date() - lastModalTime < (5 * 60 * 1000)) {
            return;
        }
    }
});
</script>


@endsection
