<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminFormRequest;
use App\diduknow;
use App\city;
use App\security;
use App\platform;
use App\gender;
use App\country;
use App\distributor;
use App\videogame;
use App\suggestion;

class LoadSuggestions extends Controller
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
        $platform = platform::all();

        $platform = $platform->pluck('name-platform','id-platform');

        $platform->all();

        $genero = gender::all();

        $genero = $genero->pluck('name-gender','id-gender');

        $genero->all();

        $paises = country::all();

        $paises = $paises->pluck('name-country','id-country');

        $paises->all();

        $distributor = distributor::all();

        $distributor = $distributor->pluck('name-distributor','id-distributor');

        $distributor->all();

        $suggestion = suggestion::all();

        $suggestion = $suggestion->pluck('game-suggested','reason');

        $suggestion->all();
        
        $arreglo = compact(
            ['platform',$platform],
            ['genero',$genero],
            ['paises',$paises],
            ['distributor',$distributor],
            ['suggestion',$suggestion]
        );

        dd($suggestion);

        //return view('admin')->with($arreglo);

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
