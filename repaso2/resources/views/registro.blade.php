@extends('layouts.plantila1')

@section('titulo', 'Libros')



@section('Libo')

@session('Guardado')
    <script>
        Swal.fire({
            title: "{{__('Libro Registrado')}}",
            text: "{{__('El Libro se registro al llavaso')}}",
            icon: "success"
        });
    </script>    
@endsession

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container p-5 col-md-6 bg-gradient rounded shadow-lg" style="background: linear-gradient(to right, #6a11cb, #2575fc);">
        <h1 class="text-center mb-4 text-white">{{__('Registro De Libros')}}</h1>
        <form action="/registrarLibro" method="POST">
            @csrf
            <div class="row g-4">

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-book"></i></span>
                        <input type="text" class="form-control" name="ISBN" id="inputISBN" value="{{old('ISBN')}}" placeholder="ISBN">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('ISBN')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-pencil"></i></span>
                        <input type="text" class="form-control" name="Titulo" id="inputTitulo" value="{{old('Titulo')}}" placeholder="Título">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('Titulo')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" name="Autor" id="inputAutor" value="{{old('Autor')}}" placeholder="Autor">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('Autor')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-file-earmark-text"></i></span>
                        <input type="number" class="form-control" name="Paginas" id="inputPaginas" value="{{old('Paginas')}}" placeholder="Número de Páginas">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('Paginas')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-calendar"></i></span>
                        <input type="number" class="form-control" name="Año" id="inputAnio" value="{{old('Año')}}" placeholder="Año">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('Año')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-house"></i></span>
                        <input type="text" class="form-control" name="Editorial" id="inputEditorial" value="{{old('Editorial')}}" placeholder="Editorial">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('Editorial')}}</small>
                </div>

                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" name="EmailEditorial" id="inputEmailEditorial" value="{{old('EmailEditorial')}}" placeholder="Correo Editorial">
                    </div>
                    <small class="fst-italic text-danger">{{$errors->first('EmailEditorial')}}</small>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-light w-100">{{__('Registrar')}}</button>
                </div>

            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


@endsection