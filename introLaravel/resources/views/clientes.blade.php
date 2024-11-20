
@extends('layouts.plantilla1')

@section('titulo','Clientes')

@section('contenido')


      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">

      @foreach ( $consultaClientes as $cliente )
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          {{ $cliente->nombre }}
        </div>
        <div class="card-body">
          <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
          <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          <a href="{{ route('rutaedit', $cliente->id) }}" class="btn btn-warning">Editar</a>
          <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
        </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      @endforeach
      </div>

      @endsection
