<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\videogame;
use App\user;
use DB;

class busquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Session::get('User') == NUll){

            return redirect('/');

        }else{
            $termino = $request->get('busqueda');

            $ArregloUsuarios = user::where('name-user','like','%'.$termino.'%')
            ->orWhere('last-name-user', 'like','%'.$termino.'%')->limit(5)->get();

            $ArregloVideogames = videogame::where('name-videogame','like','%'.$termino.'%')->limit(5)->get();

            $arreglo = compact(
                ['ArregloUsuarios',$ArregloUsuarios],
                ['ArregloVideogames',$ArregloVideogames],
                ['termino',$termino]
            );

            return view('busqueda')->with($arreglo);
        }
    }

    public function BusquedaEspecifica($modo,$termino,Request $request){


        if(Session::get('User') == NUll){

            return redirect('/');

        }else{
                if($modo == 'users'){

                    if($request->get('type') == NULL && $request->get('search') == NULL){
                        $DatosBusqueda = user::where('name-user','like','%'.$termino.'%')
                        ->orWhere('last-name-user', 'like','%'.$termino.'%')->paginate(15);
                    }else{

                        switch ($request->get('type')) {
                            case 1:

                            $DatosBusqueda = user::where([
                                [function($query)use ($termino){
                                    $query->where('name-user','like','%'.$termino.'%')
                                    ->orWhere('last-name-user', 'like','%'.$termino.'%');
                                }],
                                ['correo-contacto-user','like','%'. $request->get('search').'%']
                            ])->paginate(15);

                            break;
                            case 2:
                                $DatosBusqueda = user::where([
                                    [function($query)use ($termino){
                                        $query->where('name-user','like','%'.$termino.'%')
                                        ->orWhere('last-name-user', 'like','%'.$termino.'%');
                                    }],
                                    ['pagina-web-user','like','%'. $request->get('search').'%']
                                ])->paginate(15);
                            break;
                        }

                    }            

                }
                else if($modo == 'videogames'){
                    if($request->get('type') == NULL && $request->get('search') == NULL){
                     $DatosBusqueda = videogame::where('name-videogame','like','%'.$termino.'%')->paginate(15);
                    }else{
                        switch ($request->get('type')) {
                            case 1:
                            $DatosBusqueda = DB::table('videogames')
                                ->join('for-platforms', 'for-platforms.id-videogame', '=', 'videogames.id-videogame')
                                ->join('platforms', 'platforms.id-platform', '=', 'for-platforms.id-platform')
                                ->where([
                                        ['name-videogame','like','%'.$termino.'%'],
                                        ['name-platform','like','%'.$request->get('search').'%']
                                ])->paginate(15);
                            break;
                            case 2:
                                $DatosBusqueda = videogame::where([
                                    ['name-videogame','like','%'.$termino.'%'],
                                    ['productor','like','%'.$request->get('search').'%']
                                ])->paginate(15);
                            break;
                            case 3:
                             $DatosBusqueda = DB::table('videogames')
                                ->join('distributors', 'distributors.id-distributor', '=', 'videogames.id-distributor')
                                ->where([
                                        ['name-videogame','like','%'.$termino.'%'],
                                        ['name-distributor','like','%'.$request->get('search').'%']
                                ])->paginate(15);
                            break;
                            case 4:
                            $DatosBusqueda = DB::table('videogames')
                                ->join('distributors', 'distributors.id-distributor', '=', 'videogames.id-developer')
                                ->where([
                                        ['name-videogame','like','%'.$termino.'%'],
                                        ['name-distributor','like','%'.$request->get('search').'%']
                                ])->paginate(15);
                            break;
                            case 5:
                            $DatosBusqueda = DB::table('videogames')
                                ->join('have-genders', 'have-genders.id-videogame', '=', 'videogames.id-videogame')
                                ->join('genders', 'genders.id-gender', '=', 'have-genders.id-gender')
                                ->where([
                                        ['name-videogame','like','%'.$termino.'%'],
                                        ['name-gender','like','%'.$request->get('search').'%']
                                ])->paginate(15);
                            break;
                        }   
                    }
                }else{
                    return redirect('/articles');
                }
                $arreglo = compact(['DatosBusqueda',$DatosBusqueda],['modo',$modo],['termino',$termino]);

                return view('resultados')->with($arreglo);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Avanzado(Request $request){

    }

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
