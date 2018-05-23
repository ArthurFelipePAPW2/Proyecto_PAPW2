<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\LoginFormRequest;
use DB;
use Session;
class LoginController extends Controller
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
        $email = $request->get('email');
        $password = $request->get('password');

        $user_pass =  $password;
        $salt = md5($user_pass);
        $pasword_encriptado = crypt($user_pass, $salt);


        $result =  DB::table('administradors')->where([
            ['email-administrador', '=', $email],
            ['pass-administrador', '=', $password]
            ])->first();      

        if($result != NULL){
             Session::put('Admin',$result);
             return redirect('/admin');
        }else{
            
            $result =  DB::table('users')->where([
            ['email-user', '=', $email],
            ['pass-user', '=', $pasword_encriptado],
            ['active', '=', 1],
            ])->first();

                if($result != NULL){
                     Session::put('User',$result);
                     return redirect('/articles');
                }else{
                    return back()->withInput();
                }
            return back()->withInput();
        }
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
    public function edit()
    {
       
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
    public function destroy()
    {
        
    }

     public function logout()
    {
       Session::flush();
       return redirect('/');

    }
}
