<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js']) 
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form>

    @session('Proceso')
    <script>
        Swal.fire({
            title: "{{__('Registrado')}}",
            text: "{{__('Se Acaba De Registrar')}}",
            icon: "success"
        });
    </script>    

      @endsession

      <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="Correo" name="Correo" >
        </div>

        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="Contraseña" name="Contraseña" >
        </div>

        <div class="mb-3">
            <label for="Edad" class="form-label">Edad</label>
            <input type="text" class="form-control" id="Edad" name="Edad" >
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>