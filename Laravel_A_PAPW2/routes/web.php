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
use App\diduknow;
use App\city;
use App\security;
use App\platform;
use App\gender;
use App\country;
use App\distributor;
use App\videogame;

Route::get('/', function () {

    $ciudades = city::all();

    $ciudades = $ciudades->pluck('name-city','id-city');

    $ciudades->all();

    $pregunta = security::all();

    $pregunta = $pregunta->pluck('question','id-security');

    $pregunta->all();

    $arreglo = compact(['ciudades',$ciudades],['pregunta',$pregunta]);

    return view('index')->with($arreglo);
});

Route::get('/resena', function () {
    return view('resena');
});

Route::get('/perfil', function () {

    $ciudades = city::all();

    $ciudades = $ciudades->pluck('name-city','id-city');

    $ciudades->all();

    $pregunta = security::all();

    $pregunta = $pregunta->pluck('question','id-security');

    $pregunta->all();

    $arreglo = compact(['ciudades',$ciudades],['pregunta',$pregunta]);

    return view('perfil')->with($arreglo);
});

Route::get('/admin', function () {

    $platform = platform::all();

    $platform = $platform->pluck('name-platform','id-platform');

    $platform->all();

    $genero = gender::all();

    $genero = $genero->pluck('name-gender','id-gender');

    $genero->all();

    $paises = country::all();

    $paises = $paises->pluck('name-country','id-country');

    $paises->all();

    $distributor = distributor::all();

    $distributor = $distributor->pluck('name-distributor','id-distributor');

    $distributor->all();
    
    $arreglo = compact(
        ['platform',$platform],
        ['genero',$genero],
        ['paises',$paises],
        ['distributor',$distributor]
    );

    return view('admin')->with($arreglo);
});

Route::post('/registrar','UsersController@store');

Route::post('/login','LoginController@store');

Route::post('/registrarvdj','videogameController@store');

Route::post('/agregarcuriosidad', 'DidYouKnowController@store');

Route::post('/BajaUser', 'BajaUser@store');

Route::post('/AltaUser', 'AltaUser@store');

Route::post('/BorrarCuriosidad', 'BorrarCuriosidadController@store');

Route::post('/AgregarDistribuidora', 'DistributorController@store');

Route::resource('articles','ArticlesController');