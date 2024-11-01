<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light text-dark" style="font-family: 'Roboto', sans-serif;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3">
        <div class="container">
            <a class="navbar-brand fs-3 fw-bold text-primary" href="{{ route('rutainicio') }}">{{ __('📚 Biblioteca') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('rutainicio') }}">{{ __('Inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('rutaregistro') }}">{{ __('Registro') }}</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <header class="container text-center my-5">
        <h1 class="display-4 fw-bold text-primary">{{ __('Bienvenido') }}</h1>
        <p class="fs-5 text-secondary">{{ __('Explora') }}</p>
    </header>

    
    <div class="contenet">
        @yield('Inicio')
    </div>

    <div>
        @yield('Libo')
    </div>

    <footer class="bg-primary text-white text-center py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <h6>{{ __('Centro Tinieblas') }}</h6>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <h6>© 2024 {{ __('La Biblio') }}</h6>
                </div>
                <div class="col-12 col-md-4">
                    <h6>{{ __('31 de Octubre, 2024') }}</h6>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
