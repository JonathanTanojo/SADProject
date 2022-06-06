<?php

use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\suppliercontroller;
use App\Models\TransaksiBaru;
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

Route::get('/akun', function () {
    return view('akun');
});

// Route::get('/', function () { return view('produk');});
Route::get('/','App\Http\Controllers\produkcontroller@tableproduk');

Route::get('supplier','App\Http\Controllers\suppliercontroller@tableproduk');

Route::get('/supplier/edit/{id}',[suppliercontroller::class,"details"]);

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

Route::get('navbar', function () {
    return view('navbar');
});

Route::get('/riwayat', function () {
    return view('riwayat', [
        "title" => "Riwayat Transaksi"
    ]);
});

Route::get('/baru', function () {
    return view('baru', [
        "title" => "Transaksi Baru",
        "data" => TransaksiBaru::all()
    ]);
});

Route::get('sproduk', function () {
    return view('produk');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});
//POST

Route::get('/','App\Http\Controllers\keuanganController@viewKeuangan');


Route::get('/keuangan','App\Http\Controllers\keuanganController@viewKeuangan');
