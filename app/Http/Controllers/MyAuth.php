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

    function login_process(Request $req){
       // ถ้าผู้ใช้ไม่ได้กรอก 'email'
        if (!$req->filled('email')) {
            // ให้ตรวจสอบว่า 'username' เป็นข้อมูลบังคับ
            $rules['username'] = 'required';
        } else {
            // ถ้าผู้ใช้กรอก 'email'
            // ให้ตรวจสอบว่า 'email' เป็นไปตามรูปแบบอีเมลที่ถูกต้อง
            $rules['email'] = 'required|email';
        }
        // กำหนดให้ 'password' เป็นข้อมูลบังคับและต้องมีความยาวอย่างน้อย 6 ตัวอักษร
        $rules['password'] = 'required|min:6';


        $req->validate($rules);

        $callback = function ($user , $rules) {
            return $user->us_email === $rules['email'] || $user->us_fname === $rules['username'];
        };

        if(Auth::attempt(['us_email' => $rules['email'], 'us_password' => $rules['password']], $callback)){
            return Redirect::to('titles');
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
