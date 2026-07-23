<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Manager</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="bi bi-film me-2 fs-4"></i>
                Movie Manager
            </a>

            {{-- Bottone menu mobile --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Contenuto navbar --}}
            <div class="collapse navbar-collapse" id="navbarNav">

                {{-- Link centrati --}}
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('movies.index') }}">
                            <i class="bi bi-camera-reels me-1"></i>
                            Film
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('genres.index') }}">
                            <i class="bi bi-tags me-1"></i>
                            Generi
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('directors.index') }}">
                            <i class="bi bi-person-video3 me-1"></i>
                            Registi
                        </a>
                    </li>

                </ul>

                {{-- Destra --}}
                <div class="d-flex align-items-center gap-3">

                    <a class="nav-link text-white" href="{{ route('profile.edit') }}">
                        <i class="bi bi-person-circle me-1"></i>
                        Profilo
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button class="btn btn-outline-light rounded-pill px-3">
                            <i class="bi bi-box-arrow-right me-1"></i>
                            Logout
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>


    {{-- Footer --}}
    <footer class="bg-dark text-white mt-5 pt-5 pb-3 border-top border-secondary">

        <div class="container">

            <div class="row">

                {{-- Logo --}}
                <div class="col-md-4 mb-4">
                    <h4 class="fw-bold">
                        <i class="bi bi-film me-2"></i>
                        Movie Manager
                    </h4>

                    <p class="text-secondary">
                        Gestionale sviluppato con Laravel e React per amministrare film,
                        generi e registi in modo semplice e intuitivo.
                    </p>
                </div>

                {{-- Link rapidi --}}
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Link rapidi</h5>

                    <ul class="list-unstyled">

                        <li class="mb-2">
                            <a href="{{ route('movies.index') }}" class="text-decoration-none text-white">
                                <i class="bi bi-camera-reels me-2"></i>Film
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ route('genres.index') }}" class="text-decoration-none text-white">
                                <i class="bi bi-tags me-2"></i>Generi
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ route('directors.index') }}" class="text-decoration-none text-white">
                                <i class="bi bi-person-video3 me-2"></i>Registi
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- Social --}}
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Seguici</h5>

                    <div class="d-flex gap-3 fs-3">

                        <a href="#" class="text-white">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="text-white">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="text-white">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                        <a href="#" class="text-white">
                            <i class="bi bi-youtube"></i>
                        </a>

                        <a href="#" class="text-white">
                            <i class="bi bi-github"></i>
                        </a>

                    </div>

                </div>

            </div>

            <hr class="border-secondary">

            <div class="text-center text-secondary">
                <small>
                    © {{ date('Y') }} Movie Manager • Progetto realizzato con Laravel 11 & React
                </small>
            </div>

        </div>

    </footer>

</body>
</html>