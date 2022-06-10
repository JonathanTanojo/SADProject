<?php

namespace App\Http\Controllers;

use App\Models\BARANG;
use App\Models\produk;
use App\Models\SUPPLIERALL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkcontroller extends Controller
{
    public function tableproduk(){
        $user = new produk();
        $tabel = $user->tableproduk();
        return view('produk',compact(['tabel']));
    }
    public function kategori(){

    }
    public function details($id,Request $req) {
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_JUMLAH','BARANG_KATEGORI')->where('BARANG_ID', $id)->get();
        // dd($transdet);
        return view('editproduk',[
            "datadetail" => $transdet,
            "kategori" => $kategori
        ]);
    }
    public function restok($id,Request $req) {

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_KATEGORI')->where('BARANG_ID', $id)->get();

        return view('restokproduk',[
            "datadetail" => $transdet,
            "kategori" => $kategori
        ]);
    }
}
