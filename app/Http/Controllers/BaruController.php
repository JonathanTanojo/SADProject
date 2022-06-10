<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBaru;
use Illuminate\Http\Request;

class BaruController extends Controller
{
    public function tabletransaksi(){
        $user = new TransaksiBaru();
        $tabel = $user->tabletransaksi();
        return view('baru',compact(['tabel']));
    }
}
