<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    @vite(['resources/js/app.js']) 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container col-md-4">
        <form action="{{ route('ruta.proceso') }}" method="POST">
            @csrf

            @if (session('ruta.proceso'))
                <script>
                    Swal.fire({
                        title: "{{ __('Registrado') }}",
                        text: "{{ session('Guardado') }}",
                        icon: "success"
                    });
                </script>
            @endif

            <div class="mb-3">
                <label for="Correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="Correo" name="Correo" required>
            </div>

            <div class="mb-3">
                <label for="Contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="Contraseña" name="Contraseña" required>
            </div>

            <div class="mb-3">
                <label for="Edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="Edad" name="Edad" required min="1">
            </div>

            <button type="submit" class="btn btn-danger">Guardar Usuario</button>
        </form>
    </div>

</body>
</html>
