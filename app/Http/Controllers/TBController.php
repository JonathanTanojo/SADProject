<?php

namespace App\Http\Controllers;

use App\Models\BARANG;
use Illuminate\Http\Request;
use App\Models\TransaksiBaru;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class TBController extends Controller
{
    public function tableproduk(){
        $user = new TransaksiBaru();
        $tabel = $user->tableproduk();
        return view('baru',compact(['tabel']));
    }

    public function details($id,Request $req) {
        $item = BARANG::query()->find($id);

        $value = "SELECT b.BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_HARGA_BELI AS `Harga_Beli`,BARANG_HARGA_JUAL AS `Harga_Jual`, BARANG_JUMLAH AS `Jumlah`,SUPPLIER_NAMA as `NamaSupplier` FROM BARANG b, SUPPLIER s WHERE b.SUPPLIER_ID = s.SUPPLIER_ID  and b.BARANG_ID ='$id';";

        $produk = DB::select($value);

        return view('editproduk',[
            "d" => $produk,
            "i" => $item,
        ]);
    }
}
