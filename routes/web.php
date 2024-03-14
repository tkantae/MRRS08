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

Route::get('/T', function () {
    return view('Home');
});

Route::get('/' , [MyAuth::class,'login_view'])->name('login');
Route::get('/register' , [MyAuth::class,'register_view']);
Route::get('/logout' , [MyAuth::class,'logout_prrocess']);
Route::post('/login' , [MyAuth::class,'login_process']);
Route::post('/register' , [MyAuth::class,'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');

Route::middleware('auth')->group(function(){


});
