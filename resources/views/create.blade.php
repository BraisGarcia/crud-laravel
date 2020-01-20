@extends('layouts.main')
@section('content')
<!-- Default form login -->
<form class="text-center border border-light p-5" action="{{route('store')}}" method="POST">


    {{ csrf_field()}}
    <p class="h4 mb-4">Alumno</p>


    <input type="nombre" id="defaultLoginFormEmail" class="form-control mb-4" name="nombre" placeholder="Nombre">


    <input type="apellidos" id="defaultLoginFormPassword" class="form-control mb-4" name="apellidos" placeholder="apellidos">

    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Password -->
    <input type="telefono" id="defaultLoginFormPassword" class="form-control mb-4" name="telefono" placeholder="telefono">

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">añadir</button>

</form>
<!-- Default form login -->
@endsection