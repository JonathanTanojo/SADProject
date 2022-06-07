<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBaru;
use Illuminate\Http\Request;

class BaruController extends Controller
{
    public function index()
    {
        $input = TransaksiBaru::latest();

        return view('baru', [
            "title" => "Transaksi Baru",
            "data" => TransaksiBaru::latest()->get()
        ]);
    }
}
