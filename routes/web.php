<?php
use App\Http\Controllers\akuncontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\suppliercontroller;
use App\Http\Controllers\keuangancontroller;
use App\Http\Controllers\LoginController;
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


Route::get('supplier',[suppliercontroller::class,"tableproduk"]);

Route::get('/supplier/edit/{id}',[suppliercontroller::class,"details"]);

//Login
Route::prefix('/')->group(function(){
    Route::get('', function () {return view('login');});
    Route::post('',[logincontroller::class,"login"]);
});
//Produk
Route::prefix('/produk')->group(function(){
    Route::get('/',[produkcontroller::class,"tableproduk"] );
    Route::post('/search',[produkcontroller::class,"searchproduk"]);
    Route::post('/filter',[produkcontroller::class,"filterproduk"]);
    Route::get('/edit/{id}',[produkcontroller::class,"details"] );
});
//Ubah Data Produk
Route::prefix('/edit')->group(function(){
    Route::get('/{id}',[produkcontroller::class,"details"] );
    Route::post('/{id}',[produkcontroller::class,"updatedatabarang"]);
    Route::post('/{id}/hps',[produkcontroller::class,"hapusbarang"]);

});
// Restok Produk
Route::prefix('/restok')->group(function(){
    Route::get('/{id}',[produkcontroller::class,"restok"] );
    Route::POST('/{id}',[produkcontroller::class,"updatejumlahbarang"]);
});
//Tambah Produk
Route::prefix('/tmbhprdk')->group(function(){
    Route::get('/',[produkcontroller::class,"tableaddproduk"]);
    Route::POST('/proses',[produkcontroller::class,"updatebarang"]);
});
//Laporan
Route::prefix('/laporan')->group(function(){
    Route::get('', [keuangancontroller::class,"viewKeuangan"]);
    Route::post('/tanggal',[keuangancontroller::class,"tarikdata"]);
    Route::post('/search',[keuangancontroller::class,"carilaporan"]);
});
//Detail Laporan
Route::prefix('/detaillaporan')->group(function(){
    Route::get('', [keuanganController::class,"detailKeuangan"]);
    Route::post('/tanggal',[keuangancontroller::class,"detailtarikdata"]);
    Route::post('/search',[keuangancontroller::class,"detailcarilaporan"]);
});


Route::get('/ubahpass', function () {
    return view('ubahpassword');
});

Route::prefix('/user')->group(function(){
    Route::get('/',[akuncontroller::class,"tableakun"]);
});

Route::post('userupdate', [akuncontroller::class,"userupdate"]);
Route::post('passwordupdate', 'App\Http\Controllers\akuncontroller@passwordupdate')->name('passwordupdate');
Route::post('autopass', 'App\Http\Controllers\logincontroller@autopass');




Route::get('navbar', function () {
    return view('navbar');
});
Route::get('tmbhsupplier', function () {
    return view('tmbhsupplier');
});


// Route::get('','App\Http\Controllers\keuanganController@viewKeuangan');
Route::post('/laporan1',[keuangancontroller::class,"tarikdata"]);
