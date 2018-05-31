<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\security;
use App\user;
use Session;
use DB;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      
    $ciudades = city::all();

    $ciudades = $ciudades->pluck('name-city','id-city');

    $ciudades->all();

    $pregunta = security::all();

    $pregunta = $pregunta->pluck('question','id-security');

    $pregunta->all();

    $msg = NULL;

    $user = NULL;

    $arreglo = compact(['ciudades',$ciudades],['pregunta',$pregunta],['msg',$msg],['user',$user]);

    return view('index')->with($arreglo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    $ciudades = city::all();

    $ciudades = $ciudades->pluck('name-city','id-city');

    $ciudades->all();

    $pregunta = security::all();

    $pregunta = $pregunta->pluck('question','id-security');

    $pregunta->all();

    $msg = NULL;

    $user = user::where([
        ['email-user','=', $request->get('email2')],
        ['id-security','=', $request->get('pregunta2')],
        ['answer','=', $request->get('respuesta2')]
    ])->first();

    if($user == NULL){
            $msg = 'falso';
    }else{
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $tamanocaracters = strlen($caracteres);
            $NuevaContrasena = '';
            for ($i = 0; $i < 8; $i++) {
                $NuevaContrasena .= $caracteres[rand(0, $tamanocaracters - 1)];
            }
            $user_pass_new =  $NuevaContrasena;
            $salt = md5($user_pass_new);
            $pasword_encriptado = crypt($user_pass_new, $salt);

            DB::table('users')
            ->where('id-user', '=' , $user->{'id-user'})
            ->update(['pass-user' => $pasword_encriptado]);

            $user = $NuevaContrasena;

            $msg = 'verdadero';
    }

    $arreglo = compact(
        ['ciudades',$ciudades],
        ['pregunta',$pregunta],
        ['msg',$msg],
        ['user',$user]
    );

        return view('index')->with($arreglo);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
