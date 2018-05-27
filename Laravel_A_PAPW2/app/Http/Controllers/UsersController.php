<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\maodifyuser;
use App\User;
use App\diduknow;
use DB;
use Session;

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

    $ValidarCorreo = user::where('email-user','=',$email)->first();

    if($ValidarCorreo == NULL){
    $user_pass =  $password;
    $salt = md5($user_pass);
    $pasword_encriptado = crypt($user_pass, $salt);


    $user = new User(array(
                        "name-user" => $nombre,
                        "last-name-user" => $apellido,
                        "email-user" => $email,
                        "pass-user" => $pasword_encriptado,
                        "gender" => $genero,
                        "avatar" => $avatar,
                        "birthday" => $nacimiento,
                        "answer" => $answer,
                        "id-city" => $ciudad,
                        "id-security" => $pregunta
    ));

        Session::put('User',$user);
                    
        $user->save();

         return redirect('/articles');
     }else{
        return back()->withErrors(['Ese correo ya está en uso.']);;
     }
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

    public function ActualizarContra(maodifyuser $request){
   
        $user_pass = $request->get('pass');;
        $salt = md5($user_pass);
        $pasword_encriptado = crypt($user_pass, $salt);

        user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['pass-user' => $pasword_encriptado]);

            return back();
    }

    public function ActualizarNombre(maodifyuser $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['name-user' => $request->get('nombre')]);

            return back();
    }

    public function ActualizarAcerca(maodifyuser $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['acerca' => $request->get('acerca')]);

            return back();
    }

     public function ActualizarApellido(maodifyuser $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['last-name-user' => $request->get('apellido')]);

            return back();
    }

     public function ActualizarCiudad(Request $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['id-city' => $request->get('ciudad')]);

            return back();
    }

     public function ActualizarCorreo(Request $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['correo-contacto-user' => $request->get('correo')]);

            return back();
    }

     public function ActualizarWeb(maodifyuser $request)
    {
            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['pagina-web-user' => $request->get('pagina')]);

           return back();
    }

     public function ActualizarImagen(maodifyuser $request)
    {   
            $avatar = base64_encode(file_get_contents($request->file('imagen')->path()));

            user::where('id-user', '=' , Session::get('User')->{'id-user'}
            )->update(['avatar' => $avatar]);

            Session::get('User')->{'avatar'} = $avatar;

            return back();
    }
}
