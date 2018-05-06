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

Route::get('/', function () {
    return view('index');
});

Route::get('/principal', function () {
    return view('principal');
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

Route::post('/Bienvenido', function () {

	$nombre = Input::get('username');
	$apellido = Input::get('apellido');
	$email = Input::get('email');
	$password = Input::get('password');
	$genero = Input::get('genero');
	$nacimiento = Input::get('date');
	$pregunta = Input::get('pregunta');
	$avatar = Input::get('imagen');
	$ciudad = Input::get('ciudad');

	$nuevouser = array(
						"name-user" => $nombre,
						"last-name-user" => $apellido,
						"email-user" => $email,
						"pass-user" => $password,
						"gender" => $genero,
						"avatar" => $avatar,
						"birthday" => $nacimiento,
						"id-city" => $ciudad,
						"id-security" => $pregunta
					);

	if(DB::table('users')->where('email-user','=',$email)->get()){

		return back()->withInput();

	}else{

		DB::table('users')->insert($nuevouser);
		return redirect::to('/principal');
		
	}

    
});