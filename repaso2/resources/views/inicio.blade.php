@extends('layouts.plantila1')

@section('titulo', 'La biblio')

@section('Inicio')
<div class="container-fluid vh-100 d-flex align-items-center bg-light p-4">
    <div class="container text-center mb-5">
        <h1 class="text-primary mb-3">{{ __('Notis') }}</h1>
        <p class="text-muted">{{ __('Mundo literario Tinieblas') }}</p>
    </div>

    <div class="row gy-4 d-flex justify-content-center">
        <!-- Sección de noticias literarias -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Soria y su 'fiesta de Halloween'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Macu Llorente - NOTICIA</h6>
                    <p class="card-text">
                        31.10.2024 - 18:00h<br>
                        La ciudad vive su particular fiesta de los muertos homenajeando al escritor Gustavo Adolfo Bécquer y a su leyenda "El Monte de las Ánimas", considerado como el mejor relato corto de terror de la literatura castellana.
                    </p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">La isla que debes visitar si eres amante de los gatos</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NOTICIA</h6>
                    <p class="card-text">
                        Descubre la mágica isla donde los gatos son los verdaderos reyes y exploradores, perfecta para los amantes de estos felinos.
                    </p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Siete ciudades europeas tranquilas para viajar este otoño</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NOTICIA</h6>
                    <p class="card-text">
                        Explora las ciudades más tranquilas de Europa este otoño, ideales para escapar del bullicio y disfrutar de la literatura.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
