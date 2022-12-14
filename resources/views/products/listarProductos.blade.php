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
                        <a href="{{ url('/admin/products-index/create') }}" class="btn btn-success btn-sm rounded-pill"
                            title="Agregar un nuevo producto">
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
                                        <th>Precio</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $pro)
                                        <tr>
                                            <td>{{ $pro->id }}</td>
                                            <td>{{ $pro->product_name }}</td>
                                            <td>{{ $pro->product_description }}</td>
                                            <td>
                                                <img src="{{$pro->photo}}" alt="{{$pro->photo}}" class="img-fluid" width="50px">
                                            </td>
                                            <td>{{ $pro->price }}</td>
                                            <td>
                                                <a href="{{ url('/admin/products-index/' . $pro->id) }}"
                                                    title="ver producto"><button class="btn btn-info btn-sm"><i class="bi bi-eye"></i>  Ver</button></a>
                                                <a href="{{ url('/admin/products-index/' . $pro->id . '/edit') }}"
                                                    title="editar producto"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i>  Editar</button></a>
                                                <form method="POST" action="{{ url('/admin/products-index' . '/' . $pro->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="borrar producto" onclick="return confirm("Confirmar eliminar
                                                        producto")"><i class="bi bi-trash3"></i>  Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
