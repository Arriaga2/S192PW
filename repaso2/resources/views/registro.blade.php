@extends('layouts.plantila1')

@section('titulo', 'Registro')

@section('contenido')

<div class="container mt-5">
    <h1 class="text-center mb-4">Registro de Libro</h1>
    <p class="text-center">Complete registrar un nuevo libro en la biblioteca.</p>

    <form action="{{ route('rutaregistro') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" >
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" >
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" >
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="number" class="form-control" id="paginas" name="paginas" >
        </div>
        <div class="mb-3">
            <label for="año" class="form-label">Año</label>
            <input type="number" class="form-control" id="año" name="año" >
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial" >
        </div>
        <div class="mb-3">
            <label for="email_editorial" class="form-label">Coreo de Editorial</label>
            <input type="email" class="form-control" id="email_editorial" name="email_editorial" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar Libro</button>
        </div>

    </form>

</div>

@endsection
