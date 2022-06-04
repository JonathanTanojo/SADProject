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

Route::get('/', function () {
    return view('akun');
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
Route::get('/ubahpass', function () {
    return view('ubahpassword');
});
Route::prefix('/')->group(function(){
    Route::get('', function () {return view('login');});
    Route::post('','App\Http\Controllers\logincontroller@login');

});
//POST

// Route::get('/keuangan', function () {
//     return view('keuangan');
// });

Route::get('/keuangan','App\Http\Controllers\keuanganController@viewKeuangan');
