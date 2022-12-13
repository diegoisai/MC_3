@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin:20px">
                <div class="card">
                    <div class="card-header">
                        <h2>Todos los productos</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('create-products') }}" class="btn btn-success btn-sm rounded-pill" title="Agregar un nuevo producto">
                            Agregar uno nuevo
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Imagen</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Uvas</td>
                                        <td>Fruta fresca</td>
                                        <td>Imagen-01</td>
                                        <td>
                                            <a href="" title="ver producto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></a>
                                            <a href="" title="editar producto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button></a>
                                            <a href="" title="eliminar producto"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection