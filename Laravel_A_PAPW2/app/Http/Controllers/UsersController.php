<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\User;
use App\diduknow;
use DB;

class UsersController extends Controller
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
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {

    $nombre = $request->get('username');
    $apellido = $request->get('apellido');
    $email = $request->get('email');
    $password = $request->get('password');
    $genero = $request->get('genero');
    $nacimiento = $request->get('date');
    $pregunta = $request->get('pregunta');
    $ciudad = $request->get('ciudad');
    $answer = $request->get('answer');
    $avatar = base64_encode(file_get_contents($request->file('imagen')->path()));

        $user = new User(array(
                        "name-user" => $nombre,
                        "last-name-user" => $apellido,
                        "email-user" => $email,
                        "pass-user" => $password,
                        "gender" => $genero,
                        "avatar" => $avatar,
                        "birthday" => $nacimiento,
                        "answer" => $answer,
                        "id-city" => $ciudad,
                        "id-security" => $pregunta
        ));

        $user->save();

         return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
    {
        $user = $request->get('user');
        $password = $request->get('password');
        $admin = $request->get('admin');

        $result =  DB::table('administradors')->where([
            ['pass-administrador', '=', $password],
            ['id-administrador', '=', $admin],
            ])->first();

        if($result != NULL){
            DB::table('users')
            ->where('id-user', '=' , $user)
            ->update(['active' => 1]);
            return back();
        }else{
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = $request->get('user');
        $password = $request->get('password');
        $admin = $request->get('admin');

        $result =  DB::table('administradors')->where([
            ['pass-administrador', '=', $password],
            ['id-administrador', '=', $admin],
            ])->first();

        if($result != NULL){
            DB::table('users')
            ->where('id-user', '=' , $user)
            ->update(['active' => 0]);
            return back();
        }else{
            return back()->withInput();
        }
    }
}
