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

Route::get('/principal', function () {

    	$curiosidad = diduknow::all();
        
        if((count($curiosidad->where('active', 1)) == 0)){
			$curiosidad = NULL;
        }else{
        	$curiosidad = $curiosidad->where('active', 1);
        	$curiosidad = $curiosidad->random();
        }

        return view('/principal')->with('curiosidad',$curiosidad);

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

    $arreglo = compact(['platform',$platform],['genero',$genero]);

    return view('admin')->with($arreglo);
});

Route::post('/registrar','UsersController@store');

Route::post('/login','LoginController@store');

Route::post('/registrarvdj','videogameController@store');

Route::post('/agregarcuriosidad', 'DidYouKnowController@store');

Route::post('/BajaUser', 'BajaUser@store');

Route::post('/AltaUser', 'AltaUser@store');

Route::post('/BorrarCuriosidad', 'BorrarCuriosidadController@store');