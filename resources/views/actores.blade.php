@extends('plantilla')
@section('title')
  Listado
@endsection
@section('estilo')
  "/css/app.css"
@endsection
@section("main")
  <h1>Actores:</h1>
  <h2>Buscar...</h2>
  <form class="" action="http://localhost:8000/actores/buscar/{{$_POST['texto']}}" method="post">
    <input type="text" name="texto" value="" placeholder="Ingresar letras">
    <input type="submit" name="buscar" value="buscar">
  </form>
  @for ($i=0; $i < count($Actores); $i++)
    <p><a href="http://localhost:8000/actor/{{$Actores[$i]["id"]}}">{{$Actores[$i]->getNombreCompleto()}}</a></p>
  @endfor
@endsection
