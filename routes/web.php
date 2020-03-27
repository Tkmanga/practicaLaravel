<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function () {
    return "Cree una ruta mas en laravel";
});

Route::get('/esPar/{num}', function ($num) {
    return $retVal = ($num%2==0) ? "Es Par" : "Es Impar" ;;
});
Route::get('/sumar/{num}/{num2}', function ($num, $num2) {
    return  $num + $num2;
});
Route::get('/sumar/{num}/{num2}/{num3?}', function ($num, $num2, $num3=0) {
    return  $num + $num2+$num3;
});

Route::get('/peliculas',function()
{
  $peliculas = [0 => ["titulo"=>"rapido y furioso 1","rating"=>"4"],
  1 => ["titulo"=>"rapido y furioso 2","rating"=>"5"],
  2 => ["titulo"=>"rapido y furioso 3","rating"=>"6"],
  3 => ["titulo"=>"rapido y furioso 4","rating"=>"90"],
  4 => ["titulo"=>"rapido y furioso 5","rating"=>"8"]
];
    $var = compact("peliculas");
  return view('peliculas',$var);
});

Route::get('/detallesPelicula/{id}',function($id)
{

  $peliculas = [0 => ["id"=>1,"titulo"=>"rapido y furioso 1","rating"=>"4"],
  1 => ["id"=>2,"titulo"=>"rapido y furioso 2","rating"=>"5"],
  2 => ["id"=>3,"titulo"=>"rapido y furioso 3","rating"=>"6"],
  3 => ["id"=>4,"titulo"=>"rapido y furioso 4","rating"=>"90"],
  4 => ["id"=>5,"titulo"=>"rapido y furioso 5","rating"=>"8"]
];

    $var = compact("peliculas","id");
  return view('detallesPelicula',$var);
});

Route::get('/actores','ActorController@directory');
Route::get('/actor/{id}','ActorController@show');
Route::get('/actores/buscar/{texto}','ActorController@search');
/*
Buscador:

En la vista actores.blade.php, crear un formulario que tenga únicamente un campo de texto. Este formulario tendrá el objetivo de buscar actores. (Tener en cuenta que el formulario deberá apuntar a la ruta /actores/buscar)

Crear la ruta /actores/buscar, que redirigirá al método ActorController@search, y retorne la vista actores.blade.php.

En el controlador ActorController, utilizando Eloquent, obtener los actores cuyo nombre contenga los caracteres buscados. Guardar el actor en la variable $actores, y enviarla a la vista. (Se recomienda utilizar el método where)

Agregar en actores.blade.php un segundo formulario con el botón “Limpiar”, que envíe a la ruta original sin filtros de búsqueda.

Modificar el resultado de las búsquedas para que muestre el listado de actores ordenados por apellido.

Modificar el listado para que los resultados aparezcan paginados. Modificar todos los controladores necesarios.

*/
