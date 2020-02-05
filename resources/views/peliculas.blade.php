@extends('plantilla')
@section('title')
  Peliculas
@endsection
@section("main")
    @for ($i=0; $i < count($peliculas); $i++)
      <p>{{$peliculas[$i]["titulo"]}}
        @if ($peliculas[$i]["rating"]>8)
           rating {{$peliculas[$i]["rating"]}} Recomendada
        @else
          rating {{$peliculas[$i]["rating"]}}
        @endif
      </p>

    @endfor

    <!--
      <p>No hay peliculas</p>
      @unless ($peliculas!=null)
    @endunless
    -->
@endsection
