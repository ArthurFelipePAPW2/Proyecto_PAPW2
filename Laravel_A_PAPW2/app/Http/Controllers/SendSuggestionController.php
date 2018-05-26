<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuggestionFormRequest;
use App\suggestion;

class SendSuggestionController extends Controller
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
    public function store(SuggestionFormRequest  $request)
    {
        
        $name = $request->get('vg_name');
        $content = $request->get('content');
        $link = $request->get('link');
        $user = $request->get('user');

        $sugerencia = new suggestion(array(
                        "game-suggested" => $name,
                        "reason" => $content,
                        "id-user" => $user,
                        "link" => $link,
                        "id-administrador" => 1
        ));

        $sugerencia->save();

        return redirect('/articles');
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
    public function destroy(SuggestionFormRequest  $request)
    {
        $sugg = $request->get('peticion');

        echo $sugg;

/*
        DB::table('suggestions')
            ->where('id-suggestion', '=' , $sugg)
            ->delete();
*/
        //return back();
    }
}
