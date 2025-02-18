<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <style>

        .image-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url({{ asset('images/rol.jpeg') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }

        .logo-container {
            position: fixed;
            background-image: url({{ asset('images/logo_big.png') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 1;
        }

        /* Contenedor central que contiene la imagen */
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            height: 60%;
        }

        /* Estilo para la imagen dentro del div */
        .centered-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .logo{
            height: 50px;
            width: auto;
        }

        /* Estilos de dark mode */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1f2937;
            }

            .navbar {
                background-color: white;
                /* Fondo oscuro con opacidad */
            }

            .navbar a {
                color:#18485c;
            }

            .navbar a:hover {
                color: #ff5f44;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               <img class="logo" src="{{asset("images/logo_small.png")}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Auth::check())
                    <ul class="navbar-nav me-auto">
                        <li class="nav_item">
                            <a class="nav-link" href="{{ route('juegos.index') }}">{{ __('Juegos') }}</a>
                        </li>
                        @if (Auth::user()->rol == "admin")
                            <li class="nav_item">
                                <a class="nav-link" href="{{ route('tipos.index') }}">{{ __('Tipos de Juego') }}</a>
                            </li>
                            <li class="nav_item">
                                <a class="nav-link"
                                    href="{{ route('editorials.index') }}">{{ __('Editoriales') }}</a>
                            </li>
                        @endif
                    </ul>
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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

    <div class="image-container">
        <div class="centered-content">
            <img src="{{ asset('images/logo_big.png') }}" alt="Imagen centrada" class="centered-image" />
        </div>
    </div>


</body>

</html>
