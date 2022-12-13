@extends('layouts.plantilla')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">Crear un nuevo producto</div>
    <div class="card-body">

        <form action="{{ url('/admin/products-index') }}" method="POST">
        @csrf
        <Label>Nombre</Label><br>
        <input type="text" name="product_name" id="product_name" class="form-control"><br>

        <label>Descripcion</label><br>
        <input type="text" name="product_description" id="product_description" class="form-control"><br>

        <label>Imagen</label><br>
        <input type="text" name="photo" id="photo" class="form-control"><br>

        <label>Precio</label><br>
        <input type="text" name="price" id="price" class="form-control"><br>

        <input type="submit" value="save" class="btn btn-success"><br>
        </form>
    </div>
</div>
    
@endsection