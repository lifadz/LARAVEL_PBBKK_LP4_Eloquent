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

// Pada file ini, kita akan membuat routes untuk mendefinisikan rute atau URL yang di handle oleh web yang kita buat

//Pada code di bawah ini, merupakan code method Route yang berfungsi untuk membuat route dari file blade yang telah kita buat di dalam folder views yang nantinya akan mengembalikan file blade apa yang di routing berdasarkan code "Route::get()". Dengan kata lain,akan menampilkan apa isi file blade yang telah kita buat ke dalam halaman browser berdasarkan routes yang telah dibuat

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