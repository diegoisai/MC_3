@extends('layouts.plantilla')
@section('content')

    <div class="card mb-3" style="margin: 60px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/{{ $products->photo }}" class="img-fluid rounded-start" alt="{{ $products->product_name }}"
                    width="300px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">Nombre del producto: {{ $products->product_name }}</h1>
                    <p class="card-text">Descripcion: {{ $products->product_description }}</p>
                    <p class="card-text"><small class="text-muted">Precio: $ {{ $products->price }}</small></p>
                </div>
                <a href="{{ url('/admin/lista-productos') }}" class="btn btn-outline-danger rounded-pill">Volver a la
                    lista</a>
            </div>
        </div>
    </div>
