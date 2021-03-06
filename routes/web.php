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

// Route::get('/peliculas','PeliculaController@index');

Route::get('/peliculas/{pagina?}','PeliculaController@index');

Route::get('/detalle/{year?}', [
            'middleware' => 'testyear',
            'uses' => 'PeliculaController@detalle',
            'as'   => 'detalle.pelicula'
]);

Route::resource('usuario','UsuarioController');

Route::get('/redirigir','PeliculaController@redirigir');

Route::get('/formulario','PeliculaController@formulario');
Route::post('/recibir','PeliculaController@recibir');

//Rutas de fruta
Route::group(['prefix'=>'frutas'], function(){
    Route::get('index','FrutaController@index');
    Route::get('detail/{id}','FrutaController@detail');
    Route::get('crear','FrutaController@create');
    Route::post('save','FrutaController@save');
    Route::get('delete/{id}','FrutaController@delete');
    Route::get('edit/{id}','FrutaController@edit');
    Route::post('update','FrutaController@update');
});

/*
Route::get('/mostrar-fecha', function () {
    $titulo = "Fecha del Sistema";
    return view('mostrar-fecha',array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}', function ($titulo) {
    return view('pelicula',array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo?}', function ($titulo="No hay una película seleccionada :(") {
    return view('pelicula',array(
        'titulo' => $titulo
    ));
});

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
*/
