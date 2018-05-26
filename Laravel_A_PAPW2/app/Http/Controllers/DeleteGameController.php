<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminFormRequest;
use App\videogame;
use App\suggestion;
use DB;

class DeleteGameController extends Controller
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
    public function store(AdminFormRequest $request)
    {
        //
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
    public function edit(AdminFormRequest $request)
    {
        $idGame = $request->get('idGame');
        $name = $request->get('nombre');
        $productor = $request->get('productor');
        $developer = $request->get('desarrolladora');
        $distributor = $request->get('distribuidora');
        $mode = $request->get('modo');
        $description = $request->get('descripcion');

        if ($request->hasFile('newImage')) {
            $cover = base64_encode(file_get_contents($request->file('newImage')->path()));
        }else{
            $cover = $request->get('pastImage');
        }

        videogame::where('id-videogame', $idGame)
                ->update([
                        'name-videogame' => $name,
                        'productor' => $productor,
                        'id-developer' => $developer,
                        'id-distributor' => $distributor,
                        'mode' => $mode,
                        'description' => $description,
                        'cover' => $cover,
                        ]);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminFormRequest $request)
    {
        $game = $_POST['idGame'];

        $result =  DB::table('videogames')->where([
            ['id-videogame', '=', $game],
            ])->first();

        if($result != NULL){
            echo json_encode($result);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminFormRequest $request)
    {
        $game = $request->get('videojuego');
        $admin = $request->get('admin');
        $pass = $request->get('password');

        $result =  DB::table('administradors')->where([
            ['pass-administrador', '=', $pass],
            ['id-administrador', '=', $admin],
            ])->first();

        if($result != NULL){
            DB::table('videogames')
            ->where('id-videogame', '=' , $game)
            ->update(['active' => 0]);
            return back();

            //echo "Funciona y encontro al admin";
        }else{

            //echo "No lo encontro";
            return back()->withInput();
        }

        //echo $game;
    }

    public function retorn(AdminFormRequest $request)
    {
        $game = $request->get('downgame');
        $admin = $request->get('admin');
        $pass = $request->get('password');

        $result =  DB::table('administradors')->where([
            ['pass-administrador', '=', $pass],
            ['id-administrador', '=', $admin],
            ])->first();

        if($result != NULL){
            DB::table('videogames')
            ->where('id-videogame', '=' , $game)
            ->update(['active' => 1]);
            return back();

            //echo "Funciona y encontro al admin";
        }else{

            //echo "No lo encontro";
            return back()->withInput();
        }

        //echo $game;
    }

    public function deleteSugg(AdminFormRequest $request)
    {
        $id = $request->get('peticion');

        $sugg = suggestion::find($id);

        $sugg->delete();


        //echo $sugg;

        //DB::table('suggestions')
         //   ->where('id-suggestion', '=' , $sugg)
          //  ->delete();

        return back();
    }
}
