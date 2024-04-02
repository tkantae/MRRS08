<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MyAuth extends Controller
{
    function login_view(){
        return view('login');
    }

    function login_process(Request $req) {

        // ตรวจสอบ 'email' / 'username' {
            $rules['username'] = 'required';
        // ตรวจสอบ 'password'
            $rules['password'] = 'required|min:6';

        // ตรวจสอบข้อมูล
        $req->validate($rules);

        // กำหนด closure
        $callback = function ($user, $rules) {
            return $user->us_email === $rules['usernam'] || $user->us_fname === $rules['username'];
        };

        // ล็อกอิน
        if (Auth::attempt(['us_password' => $req['password']], $callback)) {
            return Redirect::to('Employee');
        } else {
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
