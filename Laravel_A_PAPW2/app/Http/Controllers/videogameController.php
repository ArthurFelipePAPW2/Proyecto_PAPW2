<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideogameFormRequest;
use App\videogame;
use App\distributor;

$nombreGenero = 'App\have-gender';
use nombreGenero;


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
        $desarrollador = $request->get('desarrollador');
        $genero = $request->get('genero');
        $distribiudora = $request->get('distribiudora');
        $modo = $request->get('modo');
        $descripcion = $request->get('descripcion');
        $admin = $request->get('administrador'); 
        $imagen = base64_encode(file_get_contents($request->file('imagen')->path()));

        $videogame = new videogame(array(
                        "name-videogame" => $nombre,
                        "cover" => $imagen,
                        "description" => $descripcion,
                        "id-administrador" => $admin            
        ));

        $videogame->save();

        $last_videogame = $nombreGenero::max('id-videogame');

        foreach ($genero as $generos) {
            $genero = new `have-gender`(array(
                        "id-videogame" => $last_videogame,
                        "id-gender" => $genero        
        ));

        $genero->save();
        }

        $productor = new distributor(array(
                        "name-videogame" => $nombre,
                        "cover" => $imagen,
                        "description" => $descripcion,
                        "id-administrador" => $admin            
        ));

        $videogame->save();




        


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
