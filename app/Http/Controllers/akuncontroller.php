<?php

namespace App\Http\Controllers;

use App\Models\akun;
use Illuminate\Http\Request;

class akuncontroller extends Controller
{
    public function tableakun(){
        $akun = new akun();
        $tabel = $akun->tableakun();
        return view('akun',compact(['tabel']));
    }
}
