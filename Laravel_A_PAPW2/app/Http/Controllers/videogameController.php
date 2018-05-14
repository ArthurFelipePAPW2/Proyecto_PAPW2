<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideogameFormRequest;
use App\videogame;
use App\distributor;
use App\havegender;
use App\forplatform;
use DB;



class videogameController extends Controller
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
    public function store(Request $request)
    {
        $nombre = $request->get('nombre');
        $plataforma = $request->get('plataforma');
        $productor = $request->get('productor');
        $desarrollador = $request->get('desarrolladora');
        $genero = $request->get('genero');
        $distribuidora = $request->get('distribuidora');
        $modo = $request->get('modo');
        $descripcion = $request->get('descripcion');
        $admin = $request->get('administrador'); 
        $imagen = base64_encode(file_get_contents($request->file('imagen')->path()));

        $videogames = new videogame(array(
                        "name-videogame" => $nombre,
                        "cover" => $imagen,
                        "description" => $descripcion,
                        "mode" => $modo,
                        "id-administrador" => $admin, 
                        "id-distributor" => $distribuidora,
                        "id-developer" => $desarrollador,
                        "productor" => $productor           
        ));

        $videogames->save();

        $last_videogame = DB::table('videogames')->max('id-videogame');

        for($x=0;$x < count($genero);$x++){
            $generos = new havegender(array(
                        "id-videogame" => $last_videogame,
                        "id-gender" => $genero[$x]        
        ));
        $generos->save();
        }

         for($x=0;$x < count($plataforma);$x++){
             $plataformas = new forplatform(array(
                        "id-videogame" => $last_videogame,
                        "id-platform" => $plataforma[$x]       
        ));
        $plataformas->save();
        }

           return redirect('/admin');

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
