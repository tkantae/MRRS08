<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Test', function () {
    return view('Homepage');
});

Route::get('/login' , [MyAuth::class,'login_view']);
Route::get('/register' , [MyAuth::class,'register_view']);
Route::get('/logout' , [MyAuth::class,'logout_prrocess']);
Route::post('/login' , [MyAuth::class,'login_process']);
Route::post('/register' , [MyAuth::class,'register_process']);

Route::resource('titles', C_titles::class);


