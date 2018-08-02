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

route::group(["middleware" => ['web']], function()
{
     //route::get('panel', 'Desktop\Administratorcontroller@panel');
     route::get('acceso', 'clubes\alta_clubController@acceso');
     //route::get('reportes', 'Desktop\Administratorcontroller@reportes');

     route::resource('producto', 'Producto\ProductoController');

     route::get('dashboard', 'Producto\DashboardController@index');
     //route::get('producto', 'Producto\ProductoController@index');

   /*route::get('producto','Producto\ProductoController@index');

   route::resource('marca', 'Producto\MarcaController');
*/

  /*route::get('escritorio',[
    'as' => 'escritorio', 'uses' => 'Desktop1@index'
  ]);*/

    /*route::get('usuario/{codigo}', function($codigo)
  {
    return 'hola usuario '.$codigo;
  })

  ->where('codigo', '[0-9]+');
*/
  // numerico ->where('codigo', '[0-9]+');
  // texto ->where('codigo', '[A-Za-z]+');

});
