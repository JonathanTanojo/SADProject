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

        //$value = "SELECT SUPPLIER_ID AS `ID`,SUPPLIER_NAMA AS `NamaSupplier`, SUPPLIER_KATEGORI as `Kategori`, SUPPLIER_NOTLP `notlp`, SUPPLIER_ALAMAT AS `alamat` FROM `SUPPLIER` WHERE SUPPLIER_ID ='$id';";

        //$produk = DB::select($value);

        return view('editsupplier',[
            //"d" => $produk,
            "i" => $item,
        ]);
    }
}
