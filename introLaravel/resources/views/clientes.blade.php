<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <link rel="stylesheet" href="{{ asset('css/fondo.css')}}">
    <title>Consultar Clientes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('inicio')}}">Turista sin MAPS</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link" href="{{route('formulario')}}">Registro de Clientes <span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('clientes')}}">Consultar clientes</a>
            </li>
          </ul>

        </div>
      </nav>

      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          Gael Arriaga Felipe
        </div>
        <div class="card-body">
          <h5 class="fw-bold">gaelarriaga2004@gmail.com</h5>
          <h5 class="fw-medium">4681208033</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      </div>
    
</body>
</html>