<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    private $myeiei = "Hello";
    function myda()
    {

    }

    public function index(){
        return view("home");
    }
}
