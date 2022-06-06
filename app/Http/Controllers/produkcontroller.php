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
        $item = BARANG::query()->find($id);


        return view('editproduk',[
            "i"=> $item
        ]);
    }
}
