<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <link rel="stylesheet" href="{{asset('css/fondo.css')}}">
    <title>Formulario</title>
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
        </nav>

          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">
            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                Registro Clientes
              </div>
              <div class="card-body text-justify">
                
                <form>
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido">
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="correo">
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono">
                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm"> Guardar Clientes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
      
    
</body>
</html>