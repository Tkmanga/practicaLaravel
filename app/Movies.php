<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
  public $table = "movies";
  public $id = "id";
  public $timestamps = false;
  public $guarded = [];
}
