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

Route::get('/', 'pagina@index');
Route::get('/blogss/{id}', 'pagina@showpost');


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('tModelos', 't_modelosController');

Route::resource('estados', 'EstadoController');

Route::resource('aliados', 'AliadoController');

Route::resource('clientes', 'ClienteController');

Route::resource('categorias', 'CategoriaController');

Route::resource('servicios', 'ServicioController');

Route::resource('productos', 'ProductoController');

Route::resource('posts', 'PostController');

Route::resource('rols', 'RolController');

Route::resource('galerias', 'GaleriaController');

Route::resource('ilustrables', 'IlustrableController');



Route::resource('blog', 'PostUserController')->middleware('auth');

Route::resource('aliado', 'AliadoUserController')->middleware('auth');

Route::resource('servicio', 'ServicioUserController')->middleware('auth');

Route::resource('producto', 'ProductoUserController')->middleware('auth');

Route::resource('cliente', 'ClienteUserController')->middleware('auth');

Route::resource('gallery', 'GaleriaUserController')->middleware('auth');

Route::resource('ilustrable', 'IlustrableUserController')->middleware('auth');

