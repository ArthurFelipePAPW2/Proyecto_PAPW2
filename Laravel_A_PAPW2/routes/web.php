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
Route::get('/', function () {
    return view('index');
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
    return view('perfil');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/registrar','UsersController@store');

Route::post('/login','LoginController@store');

Route::post('/registrarvdj','videogameController@store');

Route::post('/agregarcuriosidad', 'DidYouKnowController@store');

Route::post('/BajaUser', 'BajaUser@store');

Route::post('/AltaUser', 'AltaUser@store');

Route::post('/BorrarCuriosidad', 'BorrarCuriosidadController@store');