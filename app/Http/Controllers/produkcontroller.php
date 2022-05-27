<?php

namespace App\Http\Controllers;

use App\Models\BARANG;
use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function tableproduk(){
        $user = new produk();
        $tabel = $user->tableproduk();
        return view('produk',compact(['tabel']));
    }

    public function details($id,Request $req) {
        $item = BARANG::query()->find($id);

        // $value = $req->session()->get('home');

        // $harga = $value[5] * $item->K_HARGA;

        // $hargaforamt =  number_format($harga);


        return view('editproduk',[
            "i" => $item,
        ]);
    }
}
