<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class keuanganController extends Controller
{
    public function viewKeuangan(){
        $user = new keuangan;
        $tabel = $user->tableKeuangan();
        return view('keuangan',compact(['tabel']));
    }
    public function detailKeuangan(){
        $user = new keuangan;
        $tabel = $user->detailKeuangan();
        return view('detaillaporan',compact(['tabel']));
    }
    public function tarikdata(Request $req){
       
        // $validated = $req->validate([
        //     'tglawal' => 'required|string'
        // ]);

        $tglawal = $req->input('tglawal');
        // dd($tglawal);
        $req->session()->put('tarikdata', [$tglawal]);
        
        $user = new keuangan;
        $tabel = $user->tarikanmaut($tglawal);
        return view('keuangan',compact(['tabel']));
    }

    // public function moneys(Request $req)
    // {
    //     $kategoribarang= $req->kategoribarang;

    //     $req->session()->put('moneys', [$kategoribarang]);
    //     return view('keuangan');
    // }
}
