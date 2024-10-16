@extends('layouts.plantilla1')

@section('titulo','Convertidor')

@section('contenido')

<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Convertidor 
        </div>
        <div class="card-body">
            
            <form action="{{ route('convertir') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" name="valor">
                </div>

                <div class="mb-3">
                    <label for="unidad" class="form-label">Selecciona</label>
                    <select class="form-select" name="unidad" required>
                        <option value="MBtoGB">MB a GB</option>
                        <option value="GBtoMB">GB a MB</option>
                        <option value="GBtoTB">GB a TB</option>
                        <option value="TBtoGB">TB a GB</option>
                    </select>
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-success">Convertir</button>
                </div>
            </form>

            {{-- nos da el resultado desde e controlador --}}
            @if (session('resultado'))
                <div class="alert alert-info mt-4">
                    {{ session('resultado') }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
