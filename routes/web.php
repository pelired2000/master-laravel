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

Route::get('/mostrar-fecha', function () {
    $titulo = "Fecha del Sistema";
    return view('mostrar-fecha',array(
        'titulo' => $titulo
    ));
});

/* Route::get('/pelicula/{titulo}', function ($titulo) {
    return view('pelicula',array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo?}', function ($titulo="No hay una película seleccionada :(") {
    return view('pelicula',array(
        'titulo' => $titulo
    ));
}); */

Route::get('/pelicula/{titulo?}/{year?}', function ($titulo='No hay una película seleccionada :(',$year=2020) {
    return view('pelicula',array(
        'titulo' => $titulo,
        'year'   => $year
    ));
})->where(array(
        'titulo' => '[a-zA-Z]+',
        'year'   => '[0-9]+'
));

Route::get('/listado-peliculas', function () {
    $titulo  = "Listado de Películas";
    $listado = array('Batman','Spiderman','Gran Torino');
    return view('peliculas.listado')
            ->with('titulo',$titulo)
            ->with('listado',$listado);
});

Route::get('/pagina-generica', function () {
    return view('pagina');
});
