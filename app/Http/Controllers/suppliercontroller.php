<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use App\Models\SUPPLIERALL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class suppliercontroller extends Controller
{
    public function tableproduk(){
        $user = new supplier();
        $tabel = $user->tableproduk();
        return view('supplier',compact(['tabel']));
    }

    public function details($id,Request $req) {
        $item = SUPPLIERALL::query()->find($id);

        // $value = "SELECT b.BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_HARGA_BELI AS `Harga_Beli`,BARANG_HARGA_JUAL AS `Harga_Jual`, BARANG_JUMLAH AS `Jumlah`,SUPPLIER_NAMA as `NamaSupplier` FROM BARANG b, SUPPLIER s WHERE b.SUPPLIER_ID = s.SUPPLIER_ID  and b.BARANG_ID ='$id';";

        // $produk = DB::select($value);

        return view('editsupplier',[
            // "d" => $produk,
            // "i" => $item,
        ]);
    }
}
