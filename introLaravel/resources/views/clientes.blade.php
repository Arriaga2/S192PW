
@extends('layouts.plantilla1')

@section('titulo','Clientes')

@section('contenido')


      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          Gael Arriaga Felipe
        </div>
        <div class="card-body">
          <h5 class="fw-bold">gaelarriaga2004@gmail.com</h5>
          <h5 class="fw-medium">4681208033</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      </div>

      @endsection
