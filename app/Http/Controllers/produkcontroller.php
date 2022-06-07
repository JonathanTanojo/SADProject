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

    public function details($id,Request $req) {
        //$item = BARANG::query()->find($id);

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI')->where('BARANG_ID', $id)->get();
        // dd($transdet);
        return view('editproduk',[
            "datadetail" => $transdet
        ]);
    }
}
