<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actors;
class ActorController extends Controller
{
  public function directory()
  {
    $Actores = Actors::all();
    $vac = compact("Actores");
    return view('actores',$vac);
  }


  public function show($id)
  {
    $Actor = Actors::find($id);
    $vac = compact("Actor");
    return view('actor',$vac);
  }

  public function search($texto)
  {
    $Actor = Actors::where('first_name','LIKE',"%$texto%")
    ->get();
    $vac = compact("Actor");
    return view('actor',$vac);
  }
}
