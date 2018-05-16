<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\reviewFormRequest;
use App\review;
use App\score;
use Session;
use DB;

class reviewController extends Controller
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
    public function store(reviewFormRequest $request)
    {
        $titulo = $request->get('titulo-comentario');
        $comentario = $request->get('comentario-texto');
        $rate = $request->get('rate');
        $user = Session::get('User')->{'id-user'};
        $videogame = $request->get('videogame');

        $result =  DB::table('reviews')->where([
            ['id-user', '=', $user],
            ['id-videogame', '=', $videogame]
            ])->first();    

        if($result == NULL){
            $review = new review(array(
                            "id-user" => $user,
                            "id-videogame" => $videogame,
                            "titulo" => $titulo,
                            "text-review" => $comentario
            ));

        $review->save();

            $score = new score(array(
                            "points" => $rate,
                            "id-user" => $user,
                            "id-videogame" => $videogame
            ));

        $score->save();
        }

         return back();
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
    public function edit(Request $request)
    {   
        $score = $request->get('rate');
        $titulo = $request->get('titulo');
        $texto = $request->get('texto');
        $videogame = $request->get('videogame');
        $user = $request->get('user');

        review::where([
            ['id-user', '=' , $user],
            ['id-videogame','=', $videogame]
        ])->update([
            'titulo' => $request->get('titulo'),
            'text-review' => $request->get('texto')
        ]);

        score::where([
            ['id-user', '=' , $user],
            ['id-videogame','=', $videogame]
        ])->update(['points' => $request->get('rate')]);

        return back();
        
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
