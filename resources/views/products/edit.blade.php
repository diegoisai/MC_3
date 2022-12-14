<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Crear producto</title>

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/style.css') }}">


    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        {{-- estilos de bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- iconos de bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Main CSS-->
    <link href="{{ asset('form.asset/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin/lista-productos') }}"><i class="bi bi-chevron-double-left"></i>   Lista de Productos</a>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto justify-content-end">
                    <li class="nav-item dropdown"><img src="{{ asset('img/logo_png.png') }}" alt="" width="100px"></li>
                </ul>
            </div>
            </div>
        </nav>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Actualizando el producto: <strong>{{ $products->product_name }}</strong></h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/lista-productos') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <input class="input--style-6" value="{{$products->product_name}}" type="text" id="product_name" name="product_name"
                                placeholder="Nombre del producto aqui">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descripcion</div>
                            <div class="value">
                                <div class="input-group mb-3">
                                    <input class="input--style-6" value="{{$products->product_description}}" type="text" name="price" id="price" placeholder="Ingresa un precio valido y accesible">
                                  </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Precio</div>
                            <div class="value">
                                <div class="input-group mb-3">
                                    <input class="input--style-6" value="{{$products->price}}" type="number" name="price" id="price" placeholder="Ingresa un precio valido y accesible">
                                  </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subir Imagen</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="photo" id="file">
                                    <label class="label--file bg-success" for="file">Escoger</label>
                                    <span class="input-file__info">Ninguna seleccionada</span>
                                </div>
                                <div class="label--desc">Se permiten archivos .jpg y/o .png</div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <button class="btn btn-outline-primary btn-dark rounded-pill" type="submit">Guardar </button>&nbsp;
                            <a href="{{ url('/admin/lista-productos') }}" class="btn btn-outline-danger rounded-pill">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('form.asset/vendor/jquery/jquery.min.js') }}"></script>


    <!-- Main JS-->
    <script src="{{ asset('form.asset/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>


{{-- @extends('layouts.plantilla')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">Editar Producto</div>
    <div class="card-body">

        <form action="{{ url('/admin/lista-productos/' . $products->id) }}" method="POST">
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
    
@endsection --}}