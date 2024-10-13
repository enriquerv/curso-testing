@extends('layout.principal')

@section('title')
    Productos
@endsection

@section('styles')
@endsection

@section('content')
    <section class="container-custom pt-60 pb-60">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="header">
                    <h1><i class="fas fa-book-open"></i> Listado de cursos activos</h1>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($products as $product)
                <div class="col-md-4 mt-5">
                    <p class="mt-2 mb-1 text-center h5 bolder">{{ $product->title }}</p>
                    <p class="mt-2 text-center"><img src="{{ $product->image }}" id="img-{{ $product->id }}" width="200px"
                            height="150px"></p>
                    <p class="mt-2 text-justify">{{ $product->description }}</p>
                    <p class="mt-2 text-center h5 bolder" style="color: #064590">Precio: $ {{ $product->price }}</p>
                </div>
            @endforeach
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
        background: linear-gradient(to right, #05448e, #396be0);
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
</style>
@section('scripts')
@endsection
