@extends('layout.principal')

@section('title')
    Inicio
@endsection


@section('content')
    <section class="container-custom pt-60 pb-60">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="header text-center">
                    <h1><i class="fas fa-book-open"></i> Cursos - Cambio de trayectoria profesional </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h2>Nosotros</h2>
                    </div>
                    <div class="card-body text-center">
                        <p class="text-justify">Esta página está dedicada a cursos para principiantes en testing. Ofrecemos una variedad de
                            cursos diseñados para ayudarte a iniciar tu carrera en el mundo del testing de software. Nuestro
                            enfoque es práctico y orientado a resultados, asegurando que adquieras las habilidades
                            necesarias para tener éxito.</p>
							<img src="https://20646053.fs1.hubspotusercontent-na1.net/hubfs/20646053/curso%20de%20testing%20de%20software.jpg" alt="" width="300px">
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h2>¿Por qué elegirnos?</h2>
                    </div>
                    <div class="card-body text-center">
                        <p class="text-justify">Elegir nuestros cursos significa que tendrás acceso a contenido de alta calidad, instructores
                            experimentados y una comunidad de aprendizaje activa. Estamos comprometidos a brindarte el mejor
                            apoyo posible en tu camino hacia una nueva trayectoria profesional.</p>
							<img src="https://victoriadigital.net/wp-content/uploads/2024/04/victoria-digital-razones-elegirnos.png" alt="" width="300px">
							
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h2>Contáctanos</h2>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Si tienes preguntas o deseas más información, no dudes en contactarnos:</p>
                        <p class="text-justify"><strong>Email:</strong> <a id="contact-email" href="mailto:info@cambiodetrayectoriaprofesional.com">info@cambiodetrayectoriaprofesional.com</a>
                        </p>
                        <p class="text-justify"><strong>Teléfono:</strong> <a id="contact-phone" href="tel:5531915810">5531915810 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeHq-vaUK8MlOy8sPlCE5cHlSF9w7jUJ6YDQ&s" alt="" width="30px"></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('styles')
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
