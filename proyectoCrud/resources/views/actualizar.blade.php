@extends('layout/plantilla')

@section("tituloPagina", "Agregar registro")

@section('contenido')

<div class="card text-center">
    <div class="card-header">
        Actualizar datos del cliente
    </div>
    <div class="card-body">
      <p class="card-text">
        <form action="{{ route('clientes.update', $clientes->id) }}" method="POST">
            @csrf
            @method("PUT")
            <label for="">Nombres</label>
            <input type="text" name="nombre" class="form-control" required value="{{$clientes->nombre}}">
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required value="{{$clientes->paterno}}">
            <label for="">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required value="{{$clientes->materno}}">
            <label for="">Fecha de nacimineto</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$clientes->fecha_nacimiento}}">
            <label for="">DNI</label>
            <input type="text" name="dni" class="form-control" required value="{{$clientes->dni}}">
            <label for="">Correo</label>
            <input type="text" name="correo" class="form-control" required value="{{$clientes->correo}}">
            <label for="">Telefono</label>
            <input type="text" name="telefono" class="form-control" required value="{{$clientes->telefono}}">
            <br>
            <a href="{{ route("clientes.index") }}" class="btn btn-secondary"> 
              <samp class="far fa-undo"></samp> Regresar</a>
            <button class="btn btn-dark">
              <span class="far fa-user-edit"></span> Actualizar datos del registro
            </button>
            
        </form>
      </p>
      
    </div>
    <div class="card-footer text-body-secondary">
      Tecsup :3
    </div>
</div>

@endsection