<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\security;
use App\user;
use App\favourite;
use Session;

class perfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $usuario)
    {

        if(Session::get('User') == NUll){

            return redirect('/');

        }else{

            $ciudades = city::all();

            $ciudades = $ciudades->pluck('name-city','id-city');

            $ciudades->all();

            $pregunta = security::all();

            $pregunta = $pregunta->pluck('question','id-security');

            $pregunta->all();

            $favoritos = favourite::where('id-user','=',$usuario)->get();
            if(Session::get('Admin')==NULL){
                if(Session::get('User')->{'id-user'} == $usuario){
                    $InfoDePerfil = user::all()->where('id-user','=',Session::get('User')->{'id-user'})->first();

                }else{

                    $InfoDePerfil = user::all()->where('id-user','=',$usuario)->first();

                    if( $InfoDePerfil == NULL){
                        return redirect('/articles');
                    }
                }
            }else{
                 $InfoDePerfil = user::all()->where('id-user','=',$usuario)->first();
            }

            $arreglo = compact(
                ['ciudades',$ciudades],
                ['pregunta',$pregunta],
                ['InfoDePerfil',$InfoDePerfil],
                ['favoritos',$favoritos]
            );

            return view('perfil')->with($arreglo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
