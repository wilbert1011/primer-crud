@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
    <div class="card-header">
        Actualizar una persona
    </div>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('personas.update', $personas->id) }}" method="POST">
          @csrf
          @method("PUT")
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre}}">
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno}}">
            <label for="">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required value="{{ $personas->materno}}">
            <label for="">Facha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $personas->fecha_nacimiento}}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{route('personas.index')}}" class="btn btn-primary">regresar</a>
        </form>
      </p>
      
    </div>
  </div>
@endsection