@extends('admin.layout.principal')

@section('title', '| Dashboard')

@section('styles')
@endsection

@section('page-header', 'Dashboard')

@section('panel-heading')
    <i class="fa fa-user fa-fw"></i> Dashboard
@endsection

@section('content')
    <section class="container-custom pt-60 pb-60">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="header text-center">
                    <h1><i class="fas fa-book-open"></i> Login exitóso </h1>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7f8;
        color: #333;
    }

    .header {
        background: linear-gradient(to right, #058e4b, #0e40b6) !important;
        color: white;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
    }

    .header h1 {
        font-size: 2.5em;
        margin: 0;
    }

    .header i {
        margin-right: 10px;
        font-size: 1.2em;
    }

    .container-custom {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa !important;
        /* Fondo suave para el contenedor */
    }

    .card {
        border-radius: 8px;
        /* Bordes redondeados para las tarjetas */
    }

    .card-header {
        background: linear-gradient(to right, #05448e, #396be0) !important;
        /* Color de fondo de las cabeceras de las tarjetas */
        color: white;
        /* Color del texto de las cabeceras */
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        background-color: #ffffff;
        /* Fondo blanco para el cuerpo de las tarjetas */
        padding: 15px;
        /* Espaciado interno */
    }

    .card-body p {
        margin: 0 0 10px;
        /* Margen para los párrafos */
    }

    a {
        color: #007bff;
        /* Color del enlace */
        text-decoration: none;
        /* Sin subrayado */
    }

    a:hover {
        text-decoration: underline;
        /* Subrayar en hover */
    }
</style>

@section('scripts')
@endsection
