<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videogame;
use App\review;
use App\score;
use Carbon\Carbon;
use App\favourite;
use App\useful;
use Session;
use DB;
class resenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($articulo)
    {
         if(Session::get('User') == NUll){

            return redirect('/');
        }else{
        $InfoDeResena = videogame::where([
            ['id-videogame','=', $articulo],
            ['active','=','1']
        ])->first();

        if($InfoDeResena == NULL){
             return redirect('/articles');
        }

        $user = Session::get('User');

        $fecha =  Carbon::now();

        $Comentarios = review::where([
            ['id-videogame','=', $articulo]
        ])->orderBy('created_at', 'desc')->get();

        $Scores = score::where([
            ['id-videogame','=', $articulo]
        ])->get();

        $MiReview = review::where([
            ['id-videogame','=', $articulo],
            ['id-user','=', $user->{'id-user'}]
        ])->first();

        $Favorito = favourite::where([
            ['id-videogame','=', $articulo],
            ['id-user','=', $user->{'id-user'}]
        ])->first();

        $PuntuacionJuego = score::where([
            ['id-videogame','=', $articulo]
        ])->get();

        $MisUseful = useful::where('id-user','=', $user->{'id-user'})->get();

        $Likes = useful::whereHas('Review', function ($query)use ($articulo,$user) {
            $query->where('id-videogame', '=', $articulo)->groupby('id-review');
        })->get();

        $sumatoria = 0;

        for($i = 0;$i< count($PuntuacionJuego);$i++){
            $sumatoria = $sumatoria + $PuntuacionJuego[$i]->{'points'};
        }

        if(count($PuntuacionJuego) != 0){
        $Promedio = $sumatoria/count($PuntuacionJuego);


        if($sumatoria % count($PuntuacionJuego) == 0){
        $Corazones = explode(".",$Promedio);

        $CorazonesLlenos = $Corazones[0];


        $CorazonesMedios = 0;

        $CantidadDeCorazonesEnviados = $CorazonesLlenos + $CorazonesMedios;

        }else{
        $Corazones = explode(".",$Promedio);

        $CorazonesLlenos = $Corazones[0];


        $CorazonesMedios = 0;


        if($Corazones[1] >= .5){
            $CorazonesMedios = 1;
        }

        $CantidadDeCorazonesEnviados = $CorazonesLlenos + $CorazonesMedios;
        }
    }else{
        $CantidadDeCorazonesEnviados = 0;
        $CorazonesLlenos = 0;
        $CorazonesMedios = 0;
    }

        

        $arreglo = compact(
            ['InfoDeResena',$InfoDeResena],
            ['user',$user],
            ['fecha',$fecha],
            ['Comentarios',$Comentarios],
            ['Scores',$Scores],
            ['MiReview',$MiReview],
            ['Favorito',$Favorito],
            ['CorazonesLlenos',$CorazonesLlenos],
            ['CorazonesMedios',$CorazonesMedios],
            ['CantidadDeCorazonesEnviados',$CantidadDeCorazonesEnviados],
            ['MisUseful',$MisUseful],
            ['Likes',$Likes]
        );

        return view('resena')->with($arreglo);
    }
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
