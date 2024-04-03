<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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

Route::get('/Homepage',function(){
    return view('Homepage');
});

Route::get('/User', [UserController::class,'getReserve']);
Route::get('/follow', [UserController::class,'getFollow']);

Route::get('/Employee',[EmployeeController::class,'mainpage']);
Route::get('/Reserve',[EmployeeController::class,'reserve']);
Route::get('/Petition',[EmployeeController::class,'petition']);
Route::get('/Reservation_list',[EmployeeController::class,'reservation_list']);
Route::get('/Statistics',[EmployeeController::class,'statistics']);
Route::get('/Manage_account',[EmployeeController::class,'manage_account']);
Route::get('/Manage_rooms',[EmployeeController::class,'manage_rooms']);
Route::get('/Accout',[EmployeeController::class,'accout']);




Route::get('/login' , [MyAuth::class,'login_view']);
Route::get('/logout' , [MyAuth::class,'logout_prrocess']);
Route::post('/login' , [MyAuth::class,'login_process']);


Route::get('/add-user', [EmployeeController::class, 'create']);
Route::get('/edit-user/{id}', [EmployeeController::class, 'showEdit']);
Route::post('/store-user', [EmployeeController::class, 'store'])->name('store-user');
Route::post('/', [EmployeeController::class, 'store'])->name('store.user');
Route::put('/update-user/{id}', [EmployeeController::class, 'updateUser'])->name('update-user');
Route::delete('/delete-user/{id}', [EmployeeController::class, 'deleteUser'])->name('delete-user');
