@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card" style="margin: 30px;">
                    <div class="card-body" style="background-color: #82ae46">
                        <h4 class="card-title">Agregar producto</h4>
                        <p class="card-description"> Aqui podras agregar un nuevo producto a nuestra tienda</p>
                        <form class="forms-sample" action="{{ url('/admin/lista-productos') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="product_name">Nombre del producto</label>
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Nombre del producto aqui">
                            </div>
                            <div class="form-group">
                                <label for="product_description">Descripcion</label>
                                <input type="text" name="product_description" id="product_description"
                                    class="form-control" placeholder="Ingrese una descripcion del producto">
                            </div>
                            <div class="form-group">
                                <label for="photo">Imagen del producto</label>
                                <input type="text" name="photo" id="photo" class="form-control"
                                    placeholder="Insertar imagen">
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                                  <input type="text" name="price" id="price" class="form-control" placeholder="Ingresa un precio valido y accesible">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary rounded-pill mr-2"><i class="bi bi-check-lg"></i> Guardar</button>
                            <a href="{{ url('/admin/lista-productos') }}" title="cancelar" class="btn btn-outline-secondary rounded-pill"><i class="bi bi-x-lg"></i> Cancelar</a>
                            
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
              <div class="card" style="margin: 30px">
                <div class="card-header">
                  <img src="{{ asset('img') }}" width="100" height="100" class="img-responsive"/>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
