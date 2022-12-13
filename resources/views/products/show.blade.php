@extends('layouts.plantilla')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">Pagina del Producto</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-tittle">Nombre: {{ $products->product_name }}</h5>
            <p class="card-text">Dscripcion: {{ $products->product_description }}</p>
            <p class="card-text">Imagen: {{ $products->photo }}</p>
            <p class="card-text">Precio: {{ $products->price }}</p>
        </div>
    </hr>
    </div>
</div>