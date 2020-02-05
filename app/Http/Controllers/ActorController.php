<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actors;
class ActorController extends Controller
{
  public function directory()
  {
    return view("actores");
  }

  public function listado(){
    $Actores = Actors::all();
    $vac = compact("Actores");
    return view('listado',$vac);
  }

  public function show($id)
  {
    $Actor = Actors::find($id);
    $vac = compact("Actor");
    return view('actor',$vac);
  }
}
