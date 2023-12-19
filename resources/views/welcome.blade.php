<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What movie today?</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="app.js" defer></script>
    @livewireStyles
@livewireScripts

    <!-- Styles -->
    <style>
        

        body {
            
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url('{{ asset('img/Today.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }
        footer {
    color: #fff;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #333; /* Couleur de fond de la barre de navigation */
    padding: 0px 0; /* Espace autour du texte et des liens */
}

footer p {
    margin: 0; /* Supprimer la marge par défaut du paragraphe */
}

nav ul {
    list-style: none; /* Supprimer les puces de la liste */
    margin: 0;
    padding: 0;
}

nav li {
    display: inline; /* Afficher les éléments de la liste en ligne plutôt qu'en bloc */
    margin-right: 20px; /* Espacement entre les éléments de la liste */
}

nav a {
    text-decoration: none; /* Supprimer le soulignement des liens */
    color: #fff;
    font-weight: bold;
}


        @media only screen and (max-width: 600px) {
            /* Adjust styles for screens with a maximum width of 600px (typical for mobile devices) */
            body {
                background-image: url('{{ asset('img/MobileToday.png') }}');
            }
            
        }

           
    </style>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information Importante !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de votre fenêtre modale -->
                <p>Ce site est à but expérimental et peut contenir des bugs et des erreurs.</p>
                <p>Nous vous remercions de votre compréhension.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuer quand même</button>
                <!-- Autres boutons si nécessaire -->
            </div>
        </div>
    </div>
</div>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    What movie today?
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                            

                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('liste') }}">Liste</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('historique') }}">Historique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('avis') }}">Avis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('top-utilisateur') }}">Top</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                                        {{ __('Profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- ... Votre contenu existant ... -->

<!-- Ajoutez ceci à la fin du body -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Vérifiez si le cookie a été défini
        if (document.cookie.indexOf("modalDisplayed=true") === -1) {
            // Si le cookie n'existe pas, affichez la fenêtre modale
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();

            // Définissez le cookie pour indiquer que la fenêtre modale a été affichée
            var expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + (5 * 60 * 1000)); // 5 minutes
            document.cookie = "modalDisplayed=true; expires=" + expirationDate.toUTCString();
        } else {
            // Si le cookie existe, vérifiez le temps écoulé depuis la dernière fois que la fenêtre modale a été affichée
            var lastModalTime = new Date(document.cookie.replace(/(?:(?:^|.*;\s*)modalTime\s*=\s*([^;]*).*$)|^.*$/, "$1"));

            // Si la période de 5 minutes n'est pas écoulée, ne montrez pas la fenêtre modale
            if (new Date() - lastModalTime < (5 * 60 * 1000)) {
                return;
            }
        }
    });
</script>

</body>



</body>
<footer>
    <p>&copy; 2023 WhatMovieToday. Tous droits réservés. | Crédits : BONNET Matthieu, VINCENT Chloé, DOMENICI Lhéo</p>
    <nav>
        <ul>
            <li><a href="apropos">À propos</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </nav>
</footer>
</html>
