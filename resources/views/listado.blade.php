@extends('plantilla')
@section('title')
  Listado
@endsection
@section('estilo')
  "/css/fondoRojo.css"
@endsection
@section("main")
  <h1>Actores:</h1>
  @for ($i=0; $i < count($Actores); $i++)
    <p><a href="http://localhost:8000/actor/{{$Actores[$i]["id"]}}">{{$Actores[$i]->getNombreCompleto()}}</a></p>
  @endfor
@endsection
