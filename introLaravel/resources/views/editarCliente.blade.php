
@extends('layouts.plantilla1')

@section('titulo','Formulario')

@section('contenido')
<div class="container">
    <h2>Editar Cliente</h2>
    <form action="{{ route('rutaedit', $cliente->id) }}" method="PUT">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="txtnombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" 
                   value="{{ old('txtnombre', $cliente->nombre) }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtnombre') }}</small>
        </div>

        <div class="mb-3">
            <label for="txtapellido" class="form-label">{{ __('Apellido') }}</label>
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" 
                   value="{{ old('txtapellido', $cliente->apellido) }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtapellido') }}</small>
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">{{ __('Correo') }}</label>
            <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" 
                   value="{{ old('txtcorreo', $cliente->correo) }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
        </div>

        <div class="mb-3">
            <label for="txttelefono" class="form-label">{{ __('Teléfono') }}</label>
            <input type="text" class="form-control" id="txttelefono" name="txttelefono" 
                   value="{{ old('txttelefono', $cliente->telefono) }}" required>
            <small class="fst-italic text-danger">{{ $errors->first('txttelefono') }}</small>
        </div>

        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm">{{ __('Guardar Cambios') }}</button>
            </div>
        </div>
    </form>
</div>

    @endsection


