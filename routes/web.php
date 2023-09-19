<?php

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
//Route untuk masuk ke halaman Welcome
Route::get('/Welcome', function () {
    return view('Welcome');
}); 

//Route untuk masuk ke halaman Login
Route::get('/Login',function(){
    return view('Auth.Login');
});

//Route untuk masuk ke halaman Register
Route::get('/Register',function(){
    return view('Auth.Register');
});