@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
    <div class="card-header">
        Eliminar una persona
    </div>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro!!!

            
              <table class="table table-sm table-hover">
                  <thead>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Fecha de Nacimiento</th>
                      
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{ $personas->nombre }}</td>
                        <td>{{ $personas->paterno }}</td>
                        <td>{{ $personas->materno }}</td>
                        <td>{{ $personas->fecha_nacimiento }}</td>
                      </tr>
                      
                  </tbody>
              </table>
          <hr>
          <form action="{{route('personas.destroy',$personas->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary">Eliminar</button>
            <a href="{{route('personas.index')}}" class="btn btn-info">regresar</a>
          </form>
          </div>
      </p>
      
    </div>
  </div>
@endsection