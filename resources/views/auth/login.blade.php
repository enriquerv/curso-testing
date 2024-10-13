@extends('layout.principal')

@section('title', trans('auth.title.login'))

@section('styles')
@endsection


@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="card shadow" style="width: 400px;">
            <div class="card-header text-center">
                <h3>Iniciar Sesión</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
                {!! Form::hidden('previous', $previous) !!}

                <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
                    {!! Form::label('email', trans('validation.attributes.email'), ['class' => 'form-label']) !!}
                    {!! Form::text('email', old('email'), [
                        'id' => 'email',
                        'class' => 'form-control',
                        'placeholder' => trans('validation.attributes.email'),
                    ]) !!}
                    <span class="text-danger">{{ $errors->first('email', ':message') }}</span>
                </div>

                <div class="form-group {{ $errors->first('password') ? 'has-error' : '' }}">
                    {!! Form::label('password', trans('validation.attributes.password'), ['class' => 'form-label']) !!}
                    {!! Form::password('password', [
                        'id' => 'password',
                        'class' => 'form-control',
                        'placeholder' => trans('validation.attributes.password'),
                    ]) !!}
                    <span class="text-danger">{{ $errors->first('password', ':message') }}</span>
                </div>

                <div class="form-group text-right">
                    {!! Form::submit(trans('auth.title.login'), ['class' => 'btn btn-primary w-100', 'id' => 'btn-login']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


<style>
    body {
        background-color: #f8f9fa;
        /* Color de fondo suave */
    }

    .card {
        border-radius: 10px;
        /* Bordes redondeados */
    }

    .card-header {
        background-color: #05478d !important;
        /* Color de encabezado */
        color: white;
        /* Color del texto del encabezado */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn-primary {
        background-color: #05478d;
        /* Color del botón */
        border-color: #05478d;
        /* Color del borde del botón */
    }

    .btn-primary:hover {
        background-color: #05478d;
        /* Color del botón en hover */
        border-color: #05478d;
        /* Color del borde en hover */
    }

    .text-danger {
        font-size: 0.875em;
        /* Tamaño del texto de error */
    }
</style>

@section('scripts')
    @include('auth.formvalidation.login')
@endsection
