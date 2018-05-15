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
use Illuminate\Support\Facades\Input;

Route::get('/','indexController@index');

Route::get('/admin', 'LoadSuggestions@store');

Route::post('/registrar','UsersController@store');

Route::post('/login','LoginController@store');

Route::post('/registrarvdj','videogameController@store');

Route::post('/agregarcuriosidad', 'DidYouKnowController@store');

Route::post('/BajaUser', 'UsersController@destroy');

Route::post('/AltaUser', 'UsersController@update');

Route::post('/BorrarCuriosidad', 'DidYouKnowController@destroy');

Route::post('/AgregarDistribuidora', 'DistributorController@store');

Route::resource('/articles','ArticlesController');

Route::post('/EnviarSugerencia', 'SendSuggestionController@store');

Route::get('/perfil/{usuario}', 'perfilController@store')->where(['usuario' => '[0-9]+']);

Route::get('/resena/{articulo}', 'resenaController@index')->where(['articulo' => '[0-9]+']);
