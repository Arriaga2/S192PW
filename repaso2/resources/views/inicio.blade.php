@extends('layouts.plantila1')

@section('titulo', 'Página Principal')

@section('contenido')
<div class="container mt-4">
    <h1>Bienvenido a la Biblioteca</h1>
    <p>Noticias literarias...</p>
</div>

<footer class="text-center mt-5">
    <p>&copy; Biblioteca, {{ date('d M Y') }}</p>
</footer>
@endsection
