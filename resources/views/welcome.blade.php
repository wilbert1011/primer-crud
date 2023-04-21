@extends('layout/plantilla')

@section('titulo','crud laravel 8')

@section('contenido')
<div class="card">
    <div class="card-header">
      Crud con laravel 8 y MySql
    </div>
    <div class="card-body">
      <h5 class="card-title">Listado de personas en el sistema</h5>
      <p>
        <a href="{{route("personas.create")}}" class="btn btn-primary">Agregar persona</a>
      </p>
      @php
          //print_r($datos);
      @endphp
      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->paterno }}</td>
                        <td>{{ $item->materno }}</td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
      </p>
    </div>
  </div>
<h1>jose cachon</h1>

<a href="{{route('personas.create')}}">agregar</a>
@endsection