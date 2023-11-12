<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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

Route::get('/customer',[CustomerController::class, 'index'])->name('customer');// membuat route customer untuk function customer pada controller customer yang berfungsi untuk menampilkan file DataCustomer

Route::get('/tambahdata',[CustomerController::class, 'tambahdata'])->name('tambahdata');// membuat route tambahdata untuk function tambahdata yang menampilkan file TambahData pada controller customer

Route::post('/insertdata',[CustomerController::class, 'insertdata'])->name('insertdata');// membuat route insertdata untuk function insertdata pada controller customer

Route::get('/tampilkandata/{id}',[CustomerController::class, 'tampilkandata'])->name('tampilkandata'); // membuat route tampilkandata untuk function tampilkandata pada controller customer

Route::post('/updatedata/{id}',[CustomerController::class, 'updatedata'])->name('updatedata'); // membuat route updatedata untuk function updatedata pada controller customer

Route::get('/delete/{id}',[CustomerController::class, 'delete'])->name('delete'); // membuat route delete untuk function delete pada controller customer

Route::resource('customers', CustomerController::class);

Route::resource('orders', OrderController::class);

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
// ... tambahkan rute lainnya sesuai kebutuhan

Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
// ... tambahkan rute lainnya sesuai kebutuhan