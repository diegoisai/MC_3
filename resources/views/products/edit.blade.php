@extends('layouts.plantilla')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">Editar Producto</div>
    <div class="card-body">

        <form action="{{ url('/admin/products-index/' . $products->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
            <label>Nombre</label></br>
            <input type="text" name="product_name" id="product_name" value="{{$products->product_name}}" class="form-control"></br>
            <label>Descripcion</label></br>
            <input type="text" name="product_description" id="product_description" value="{{$products->product_description}}" class="form-control"></br>
            <label>Imagen</label></br>
            <input type="text" name="photo" id="photo" value="{{$products->photo}}" class="form-control"></br>
            <input type="text" name="price" id="price" value="{{$products->price}}" class="form-control"></br>
            <input type="submit" value="Actualizar" class="btn btn-success"></br>
        </form>

    </div>
</div>
    
@endsection