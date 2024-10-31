<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ route('rutainicio') }}">Biblioteca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rutainicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rutaregistro') }}">Registro de Libro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('contenido')

        <footer class="bg-dark text-center text-white py-3">
            <p class="mb-0">&copy; Biblioteca {{ date('Y') }}</p>
        </footer>
    </div>
    
    <!-- Bootstarp 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>
