
@extends('layouts.plantilla1')

@section('titulo','Formulario')

@section('contenido')
<div class="container">
    <h2>Editar Cliente</h2>
    <form action="{{ route('rutaedit', $cliente->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtnombre">Nombre</label>
            <input type="text" id="txtnombre" name="txtnombre" class="form-control" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="txtapellido">Apellido</label>
            <input type="text" id="txtapellido" name="txtapellido" class="form-control" value="{{ $cliente->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="txtcorreo">Correo</label>
            <input type="email" id="txtcorreo" name="txtcorreo" class="form-control" value="{{ $cliente->correo }}" required>
        </div>
        <div class="form-group">
            <label for="txttelefono">Teléfono</label>
            <input type="text" id="txttelefono" name="txttelefono" class="form-control" value="{{ $cliente->telefono }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
    @endsection


