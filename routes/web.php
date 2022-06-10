<?php

use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\suppliercontroller;
use App\Http\Controllers\keuangancontroller;
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

Route::get('user', function () {
    return view('akun');
});

// Route::get('/', function () { return view('produk');});
Route::get('produk','App\Http\Controllers\produkcontroller@tableproduk');

Route::post('/produk','App\Http\Controllers\logincontroller@login');

Route::get('supplier','App\Http\Controllers\suppliercontroller@tableproduk');

Route::get('/supplier/edit/{id}',[suppliercontroller::class,"details"]);

Route::get('/edit/{id}', [produkcontroller::class,"details"]);

Route::get('restok', function () {
    return view('restokproduk');
});
Route::get('tmbhprdk', function () {
    return view('addproduk');
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
Route::get('tmbhsupplier', function () {
    return view('tmbhsupplier');
});

//POST

// Route::get('/keuangan', function () {
//     return view('keuangan');
// });

Route::get('laporan','App\Http\Controllers\keuanganController@viewKeuangan');
Route::get('detaillaporan','App\Http\Controllers\keuanganController@detailKeuangan');
Route::post('/laporan1',[keuangancontroller::class,"tarikdata"]);
