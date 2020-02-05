@extends('plantilla')

@section('title')
  Detalle pelicula
@endsection

@section("main")
@php
  $bandera = false;
  $num = 0;
@endphp

@for ($i=0; $i < count($peliculas); $i++)
  @if ($peliculas[$i]["id"]==$id)
    @php
      $bandera = true;
      $num = $i;
    @endphp
  @endif
@endfor

@if ($bandera)
  <p>{{$peliculas[$num]["titulo"]}} rating {{$peliculas[$num]["rating"]}}</p>
@else
  <p>No existe la pelicula</p>
@endif

@endsection
