<?php

use Illuminate\Support\Facades\Route;

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

Route::get('navbar', function () {
    return view('navbar');
});
Route::get('cashier', function () {
    return view('ncashier');
});

Route::get('laporan', function () {
    return view('nlaporan');
});

Route::get('produk', function () {
    return view('nproduk');
});

Route::get('supplier', function () {
    return view('nsupplier');
});

Route::get('user', function () {
    return view('nuser');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/ubahpass', function () {
    return view('ubahpassword');
});

//POST
Route::post('/login','App\Http\Controllers\logincontroller@login');
