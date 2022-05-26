<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function tableproduk(){
        $user = new produk();
        $tabel = $user->tableproduk();
        return view('produk',compact(['tabel']));
    }
}
