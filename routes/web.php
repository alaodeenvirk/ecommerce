<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
  Route::view('/userregister','userregister');

Route::view('login','login');

Route::post('/login',[UserController::class, "login"]);
Route::post('/userregister',[UserController::class, "userregister"]);
Route::get('/',[ProductController::class,"index"]);
Route::get('/detail/{id}',[ProductController::class,"detail"]);
Route::get('search',[ProductController::class,"search"]);
Route::POST('add_to_cart',[ProductController::class,'addTocart']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removecart']);
Route::get('ordernow',[ProductController::class,'ordernow']);
Route::post('orderplace',[ProductController::class,'orderplace']);
Route::get('myorders',[ProductController::class,'myorders']);