<?php

namespace App\Http\Controllers;

use App\Models\keuangan;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function viewKeuangan(){
        $user = new keuangan;
        $tabel = $user->tableKeuangan();
        return view('keuangan',compact(['tabel']));
    }

    // public function moneys(Request $req)
    // {
    //     $kategoribarang= $req->kategoribarang;

    //     $req->session()->put('moneys', [$kategoribarang]);
    //     return view('keuangan');
    // }
}
