@extends('master')

@section('content')
    <div class="container mt-3 p-3 rounded bg-light">
        <header class="text-center">
            <h1>Bienvenue sur notre Application !</h1>
        </header>

        <section id="about" class="mt-0 p-3 rounded bg-light">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center">À Propos De L'application</h2>
                    <p class="text-center">Notre Application est un site qui vous permet de créer des listes de médias et de partager vos avis avec d'autres utilisateurs. Que ce soit des films, des séries, des animés ou des dessins-animés, vous pouvez organiser et découvrir du contenu de manière simple et conviviale.</p>
                </div>
            </div>
        </section>

        <section id="features" class="mt-0 p-3 rounded bg-light">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center">Fonctionnalités</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Créez des listes personnalisées de vos médias préférés.</li>
                        <li class="list-group-item">Déplacez un média déjà visionné dans l'historique.</li>
                        <li class="list-group-item">Ajoutez des avis et découvrez ce que les autres pensent du même contenu.</li>
                        <li class="list-group-item">Voir le top classement des personnes qui ont donné le plus d'avis.</li>
                        <li class="list-group-item">Modifiez mon profil quand je le souhaite.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="story" class="mt-2 p-3 rounded bg-light">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center">Notre Histoire</h2>
                    <p class="text-center">Nous avons  créé ce site pour notre projet dans le cadre de notre BTS SIO.</p>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Vous pouvez inclure du code JavaScript ici pour rendre la page plus interactive si nécessaire
    </script>
@endsection
