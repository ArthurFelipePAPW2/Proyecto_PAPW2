<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DidYouKnowFormRequest;
use App\diduknow;
use DB;

class DidYouKnowController extends Controller
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
    public function store(DidYouKnowFormRequest  $request)
    {
        
        $descripcion = $request->get('texto');
        $admin = $request->get('admin');

        $curiosidad = new diduknow(array(
                        "texto" => $descripcion,
                        "id-administrador" => $admin
        ));

        $curiosidad->save();

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
    public function destroy(Request $request)
    {
        $id = $request->get('curiosidad');
        $admin = $request->get('admin');
        $password = $request->get('password');

        $result =  DB::table('administradors')->where([
            ['pass-administrador', '=', $password],
            ['id-administrador', '=', $admin],
            ])->first();

        if($result != NULL){
            DB::table('did-u-know')
            ->where('id-did-u-know', '=' , $id)
            ->update(['active' => 0]);
            return back();
        }else{
            return back()->withInput();
        }
    }
}
