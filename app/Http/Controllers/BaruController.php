<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBaru;
use Illuminate\Http\Request;

class BaruController extends Controller
{
    public function index()
    {
        $input = TransaksiBaru::latest();

        if(request('search')){
            $input->WHERE('BARANG_NAMA', 'like', '%' . request('search') . '%');
        }

        return view('baru', [
            "title" => "Transaksi Baru",
            "data" => $input->get()
        ]);
    }
}
