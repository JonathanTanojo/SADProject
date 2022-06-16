<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
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

    public function getData()
    {
        $search = DB::table('KERANJANG')
        ->select('BARANG_NAMA as Barang', 'BARANG_HARGA as Harga', 'BARANG_QTY as Qty', 'KERANJANG_TOTAL as Subtotal')
        ->where('KERANJANG_DELETE','=',0)
        ->get();

        return view('receipt',['tabel'=>$search]);
    }

    public function insertData(Request $req)
    {
        $produkbaru = new TransaksiBaru();
            $produkbaru->BARANG_NAMA = $req->namaBarang;
            $produkbaru->BARANG_HARGA = $req->hargaBarang;
            $produkbaru->BARANG_QTY = $req->quantityBarang;
            $produkbaru->KERANJANG_TOTAL = $req->hargaBarang * $req->quantityBarang;
            $produkbaru->KERANJANG_DELETE = '0';
            $produkbaru->save();

        return back()->with('berhasilditambah','updatedataberhasil');
    }

    public function insertFaktur(Request $request)
    {
        $transaksibaru = new Faktur();
            $transaksibaru->JUAL_ID = 'TJ';
            $transaksibaru->JUAL_ID = $request->namaBarang;
            $transaksibaru->JUAL_ID = $request->namaBarang;
    }
}
