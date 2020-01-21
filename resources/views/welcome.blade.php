@extends('layouts.main')
@section('content')
<h1> Página HOME </h1>

@if(session('successMsg'))

<div class="alert alert-secondary" role="alert">
    {{session('successMsg')}}
</div>

@endif

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($estudiantes as $estudiante)
    <tr>
      <th scope="row">{{$estudiante->id}}</th>
      <td>{{$estudiante->nombre}}</td>
      <td>{{$estudiante->apellidos}}</td>
      <td>{{$estudiante->email}}</td>
      <td>{{$estudiante->telefono}}</td>
      <td>
        <a class="btn btn-raised btn-primary btn-sm" href=""><i class="fas fa-user-edit"></i></a>
        <a class="btn btn-raised btn-danger btn-sm" href=""><i class="fas fa-trash-alt"></i></i></a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection