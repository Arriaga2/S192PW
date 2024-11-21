@extends('layouts.plantilla1')

@section('titulo', 'Formulario')

@section('contenido')
<div class="container">
    <h2>Editar Cliente</h2>
    <form action="{{ route('rutaupdate', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="mb-4">
        <label for="nombre" class="form-label text-secondary fw-bold">Nombre </label>
        <input type="text" class="form-control form-control-lg border-0 shadow-sm" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="mb-4">
            <label for="apellido" class="form-label text-secondary fw-bold">Apellido</label>
            <input type="text" class="form-control form-control-lg border-0 shadow-sm" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>
        </div>

        <div class="mb-4">
            <label for="correo" class="form-label text-secondary fw-bold">Correo Electrónico</label>
            <input type="email" class="form-control form-control-lg border-0 shadow-sm" id="correo" name="correo" value="{{ $cliente->correo }}" required>
        </div>

        <div class="mb-4">
            <label for="telefono" class="form-label text-secondary fw-bold">Teléfono</label>
            <input type="text" class="form-control form-control-lg border-0 shadow-sm" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-lg shadow">Actualizar Datos</button>
        </div>>
</form>
</div>
@endsection
