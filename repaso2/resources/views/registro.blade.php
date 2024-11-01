@extends('layouts.plantila1')

@section('titulo', 'Libros')



@section('Libo')

@session('Guardado')
    <script>
        Swal.fire({
            title: "{{__('Libro Registrado')}}",
            text: "{{__('El Libro Se Acaba De Registrar En La Base De Datos')}}",
            icon: "success"
        });
    </script>    
@endsession


@endsection