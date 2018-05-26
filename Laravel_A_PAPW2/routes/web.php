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

Route::post('/ModifyName', 'UsersController@ActualizarNombre');

Route::post('/ModifyLastName', 'UsersController@ActualizarApellido');

Route::post('/ModifyCity', 'UsersController@ActualizarCiudad');

Route::post('/ModifyPass', 'UsersController@ActualizarContra');

Route::post('/ModifyEmail', 'UsersController@ActualizarCorreo');

Route::post('/ModifyWeb', 'UsersController@ActualizarWeb');

Route::post('/ModifySecurity', 'UsersController@ActualizarSeguridad');

Route::post('/ModifyImage', 'UsersController@ActualizarImagen');

Route::post('/ModifyAbout', 'UsersController@ActualizarAcerca');

Route::post('/SendReview', 'reviewController@store');

Route::post('/ModifyReview', 'reviewController@edit');

Route::post('/AgregarFavorito', 'favouriteController@store');

Route::post('/BorrarFavorito', 'favouriteController@destroy');

Route::get('/salir', 'LoginController@logout');

Route::post('/search', 'busquedaController@index');

Route::get('/search2/{modo}/{busqueda}', 'busquedaController@BusquedaEspecifica')->where(['busqueda' => '[0-9a-zA-Z]+'],['modo' => '[a-zA-Z]+']);

Route::get('/AgregarUseful/{user}/{review}', 'usefulController@create')->where(['user' => '[0-9]+'],['review' => '[0-9]+']);

Route::get('/BorrarUseful/{user}/{review}', 'usefulController@destroy')->where(['user' => '[0-9]+'],['review' => '[0-9]+']);

Route::post('/Lost-password','indexController@show');

Route::post('/BorrarJuego','DeleteGameController@destroy');

Route::post('/AltaJuego','DeleteGameController@retorn');

Route::post('/ModJuego','DeleteGameController@update');

Route::post('/ActJuego','DeleteGameController@edit');

Route::get('/BorrarComentario/{review}/{user}/{videogame}', 'reviewController@destroy')->where(['review' => '[0-9]+'],['user' => '[0-9]+'],['videogame' => '[0-9]+']);