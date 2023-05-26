@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Registro del sistema</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('succes'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">Lista de Clientes</h5>
            <p>
                <a href="{{ route('clientes.create') }}" class="btn btn-dark">
                    <span class="far fa-smile-plus"></span>Agregar cliente</a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm">
                    <thead>
                        <th>Nombres</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Fecha de nacimineto</th>
                        <th>DNI</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)                
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->paterno}}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>{{ $item->dni }}</td>
                            <td>{{ $item->correo }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>
                                <form action="{{ route("clientes.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="far fa-money-check-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("clientes.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="far fa-user-slash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $datos->links() }}
                    </div>
                </div>
            </div>
            </p>

        </div>
    @endsection;
