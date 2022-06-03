<?php

use App\Http\Controllers\produkcontroller;
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

// Route::get('/', function () { return view('produk');});
Route::get('/','App\Http\Controllers\produkcontroller@tableproduk');

// Route::get('edit', function () {
//     return view('editproduk');
// });
Route::get('/edit/{id}', [produkcontroller::class,"details"]);

Route::get('tmbhprdk', function () {
    return view('addproduk');
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
Route::get('navbar', function () {
    return view('navbar');
});

Route::get('/kasir', function () {
    return view('kasir', [
        "title" => "Kasir"
    ]);
});

Route::get('sproduk', function () {
    return view('produk');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});

Route::get('/','App\Http\Controllers\keuanganController@viewKeuangan');
