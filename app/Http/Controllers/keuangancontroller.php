<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    //Laporan Keuangan
    public function tarikdata(Request $req){
        dd("hile");
        $tglawal = $req->input('tglawal');

        $req->session()->put('tarikdata', [$tglawal]);

        $user = new keuangan;
        $tabel = $user->tarikanmaut($tglawal);
        return view('keuangan',compact(['tabel']));
    }

    public function carilaporan(Request $req)
    {
        $namabarang = $req ->input('namaproduk');

        $req->session()->put('caribarang', [$namabarang]);

        $user = new keuangan;
        $tabel = $user->caribarang($namabarang);

        return view('keuangan',compact(['tabel']));
    }
    //Detail Keuangan
    public function detailtarikdata(Request $req){
        dd("hola");
        $tglawal = $req->input('tglawal');

        $req->session()->put('tarikdata', [$tglawal]);

        $user = new keuangan;
        $tabel = $user->tarikanmaut($tglawal);
        return view('detaillaporan',compact(['tabel']));
    }

    public function detailcarilaporan(Request $req)
    {
        $namabarang = $req ->input('namaproduk');

        $req->session()->put('caribarang', [$namabarang]);

        $user = new keuangan;
        $tabel = $user->caribarang($namabarang);

        return view('detaillaporan',compact(['tabel']));
    }

}
