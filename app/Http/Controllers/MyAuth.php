<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MyAuth extends Controller
{
    function login_view(){
        return view('titles_Employee.login');
    }

    function login_process(Request $req){
        $req->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
        ]);

        $data = $req->all();
        // use Illuminate\Support\Facades\Auth;
        $login = User::where(['us_email', $data['email']],['us_password',$data['password']]);
        if($login){
            return Redirect::to('Employee');
        }else{
            return Redirect::to('login');
        }
    }


    function logout_process(){
        Auth::logout();
        return Redirect::to('login');
    }

    function register_view(){
        return view('register');
    }

    function register_process(Request $req){
        $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        ]);

        $data = $req->all();

        User::create($data);

        return Redirect::to('login');
    }
}
