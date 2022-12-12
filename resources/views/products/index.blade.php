@extends('layouts.cart')

@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">

                                <img src="{{ asset('img') }}/{{ $product->photo }}" class="card-img-top mx-auto" style="height: 150px; width: 150px;display: block;">

                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $product->name }}</h6></a>
                                    <p><strong>Descripcion: </strong>{{ $product->product_description }}</p>
                                    <p><strong>Precio: </strong> ${{ $product->price }}</p>
                                    <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-success rounded-pill btn-block text-center" role="button">Agregar al carrito <span class="icon-shopping_cart"></span></a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
