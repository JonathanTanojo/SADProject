<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class BaruController extends Controller
{
    public function tabletransaksi(Request $request){
        $namaproduk = $request->input('search');
        $search = DB::table('BARANG')
        ->select('BARANG_NAMA as Barang','BARANG_ID AS ID', 'BARANG_KATEGORI AS Kategori', 'BARANG_HARGA_BELI AS Harga_Beli','BARANG_HARGA_JUAL AS Harga_Jual', 'BARANG_JUMLAH AS Jumlah','BARANG_DELETE')
        ->where('BARANG_NAMA','like', '%'.$namaproduk.'%')
        ->where('BARANG_DELETE','=',0)
        ->get();
        return view('baru',['tabel'=>$search]);
    }

    public function getData(Request $request)
    {
        return $request->all();
    }

    public function createSession(Request $request)
    {
        $request->session()->put('namaBarang', 'Aqua');
        $request->session()->put('jumlahPesanan', '2');

    }
}
