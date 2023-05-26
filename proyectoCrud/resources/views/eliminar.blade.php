@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar cliente</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
              Estas seguro de eliminar a este Cliente??

                <table class="table table-sm table-hover">
                    <thead>
                      <th>Nombres</th>
                      <th>Apellido paterno</th>
                      <th>Apellido materno</th>
                      <th>Fecha de nacimineto</th>
                      <th>DNI</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                    </thead>
                    <tbody>
                        <tr>
                          <td>{{ $clientes->nombre }}</td>
                          <td>{{ $clientes->paterno}}</td>
                          <td>{{ $clientes->materno }}</td>
                          <td>{{ $clientes->fecha_nacimiento }}</td>
                          <td>{{ $clientes->dni }}</td>
                          <td>{{ $clientes->correo }}</td>
                          <td>{{ $clientes->telefono }}</td>
                          
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('clientes.destroy', $clientes->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route("clientes.index") }}" class="btn btn-secondary"> 
                    <samp class="far fa-undo"></samp> Regresar</a>
                  <button class="btn btn-danger">
                    <span class="far fa-trash"></span> Eliminar
                  </button>
                </form>
            </div>
        </p>
    </div>
    <div class="card-footer text-body-secondary">
      Tecsup :3
    </div>
</div>
@endsection