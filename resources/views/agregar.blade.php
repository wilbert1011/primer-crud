@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
    <div class="card-header">
        Agregar nueva persona
    </div>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('personas.store') }}" method="POST">
          @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label for="">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label for="">Facha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route('personas.index')}}" class="btn btn-info">regresar</a>
        </form>
      </p>
      
    </div>
  </div>
@endsection