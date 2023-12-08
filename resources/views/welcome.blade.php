<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What movie today?</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            padding: 0px;
            text-align: left;
            position: fixed;
            bottom: -20px;
            left: 0;
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            /* Adjust styles for screens with a maximum width of 600px (typical for mobile devices) */
            body {
                background-image: url('{{ asset('img/MobileToday.png') }}');
            }

            footer {
                color: #fff;
                padding: 0px;
                text-align: left;
                position: fixed;
                bottom: -20px;
                left: 0;
                width: 100%;
                font-size: 10px;
            }
        }
    </style>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
</body>
<footer>
    <p>&copy; 2023 WhatMovieToday. Tous droits réservés. | Crédits : BONNET Matthieu, VINCENT Chloé, DOMENICI Lhéo</p>
</footer>
</html>
