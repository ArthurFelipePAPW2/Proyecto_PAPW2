<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videogame;
use App\review;
use App\score;
use Carbon\Carbon;
use Session;

class resenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($articulo)
    {
        $InfoDeResena = videogame::where([
            ['id-videogame','=', $articulo],
            ['active','=','1']
        ])->first();

        $user = Session::get('User');

        $fecha =  Carbon::now();

        $Comentarios = review::where([
            ['id-videogame','=', $articulo]
        ])->get();

        $Scores = score::where([
            ['id-videogame','=', $articulo]
        ])->get();

        $arreglo = compact(
            ['InfoDeResena',$InfoDeResena],
            ['user',$user],
            ['fecha',$fecha],
            ['Comentarios',$Comentarios],
            ['Scores',$Scores]
        );
        return view('resena')->with($arreglo);
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
