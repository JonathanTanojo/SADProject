<?php

namespace App\Http\Controllers;

use App\Models\BARANG;
use App\Models\produk;
use App\Models\produkbaru;
use App\Models\transaksibeli;
use App\Models\transaksipembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class produkcontroller extends Controller
{
    public function tableproduk(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new produk();
        $tabel = $user->tableproduk();
        return view('produk',compact(['tabel']), ["kategori" => $kategori]);
    }
    public function searchproduk(Request $req){

        $input = $req -> input('search');

        $user = new produk;
        $tabel = $user->search($input);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('produk',compact(['tabel']), ["kategori" => $kategori]);
    }
    public function details($id,Request $req) {

        $user = new produk;
        $tabel = $user->details($id);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('editproduk',compact(['tabel']), ["kategori" => $kategori]);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->join('TRANSAKSI_PEMBELIAN','TRANSAKSI_PEMBELIAN.BARANG_ID','=','BARANG.BARANG_ID')
        ->select('BARANG_NAMA','BARANG.BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','TRANSAKSI_PEMBELIAN.BELI_JUMLAH','BARANG_KATEGORI')
        ->where('BARANG.BARANG_ID', $id)
        ->groupby('BARANG.BARANG_ID')
        ->get();

        return view('editproduk',[
            "datadetail" => $transdet,
            "kategori" => $kategori
        ]);
    }
    public function restok($id,Request $req) {

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','SUPPLIER.SUPPLIER_ID','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_KATEGORI','BARANG_JUMLAH')->where('BARANG_ID', $id)->get();
        //return back();

        return view('restokproduk',[
            "datadetail" => $transdet,
            "kategori" => $kategori
        ])->with('berhasilditambah');
    }
    public function updatedatabarang($id,Request $req){

        $namaproduk = $req->input('namaproduk');
        $kategoribarang = $req->input('kategoriproduk');
        $namasupplier = $req->input('namasupplier');
        $stoklama = $req->input('stoklama');
        $hargabeli = $req->input('hargabeli');
        $hargajual = $req->input('hargajual');
        $tanggal = $req->input('tanggal');
        if($kategoribarang == "M01")
        {
            $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update([
              'BARANG_NAMA' => $namaproduk,
              'BARANG_KATEGORI_ID' => $kategoribarang,
              'BARANG_HARGA_BELI' => $hargabeli,
              'BARANG_KATEGORI' => 'Minuman',
              'BARANG_HARGA_JUAL' => $hargajual,
              'BARANG_JUMLAH' => $stoklama]);
        }
        else if($kategoribarang == "M02"){
            $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update(['BARANG_NAMA' => $namaproduk,
              'BARANG_KATEGORI_ID' => $kategoribarang,
              'BARANG_KATEGORI' => 'Makanan',
              'BARANG_HARGA_BELI' => $hargabeli,
              'BARANG_HARGA_JUAL' => $hargajual,
              'BARANG_JUMLAH' => $stoklama]);
        }
        else if($kategoribarang == "R01"){
            $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update(['BARANG_NAMA' => $namaproduk,
              'BARANG_KATEGORI_ID' => $kategoribarang,
              'BARANG_KATEGORI' => 'Rokok',
              'BARANG_HARGA_BELI' => $hargabeli,
              'BARANG_HARGA_JUAL' => $hargajual,
              'BARANG_JUMLAH' => $stoklama]);
        }
        else if($kategoribarang == "B01"){
            $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update(['BARANG_NAMA' => $namaproduk,
              'BARANG_KATEGORI_ID' => $kategoribarang,
              'BARANG_KATEGORI' => 'Bahan Pokok',
              'BARANG_HARGA_BELI' => $hargabeli,
              'BARANG_HARGA_JUAL' => $hargajual,
              'BARANG_JUMLAH' => $stoklama]);
        }
        else{
            $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update(['BARANG_NAMA' => $namaproduk,
              'BARANG_HARGA_BELI' => $hargabeli,
              'BARANG_HARGA_JUAL' => $hargajual,
              'BARANG_JUMLAH' => $stoklama]);
        }
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new produk();
        $tabel = $user->tableproduk();

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_JUMLAH','BARANG_KATEGORI')->where('BARANG_ID', $id)->get();

        $user = new produk();
        $tabel = $user->tableproduk();

        // return view('editproduk',
        // compact(['tabel']),
        // ["kategori" => $kategori,
        // "datadetail" => $transdet,]);
        return back()->with('berhasil','udpate data berhasil');

    }
    public function hapusbarang($id,Request $req){
        $databaru = DB::table('BARANG')
              ->where('BARANG_ID',$id)
              ->update([
              'BARANG_DELETE' => '1'
              ]);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new produk();
        $tabel = $user->tableproduk();

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
        ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_JUMLAH','BARANG_KATEGORI')->where('BARANG_ID', $id)->get();

        $user = new produk();
        $tabel = $user->tableproduk();

        // return view('editproduk',
        // compact(['tabel']),
        // ["kategori" => $kategori,
        // "datadetail" => $transdet,]);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new produk();
        $tabel = $user->tableproduk();

        return back()->with('hapus','udpate data berhasil');

    }
    public function updatejumlahbarang($id,Request $req){

        $stoklama = $req->input('stoklama');
        $stokbaru = $req->input('stokbaru');
        $tanggal = $req->input('tanggal');
        $namasip = $req -> input('namasupplier');
        $totaljumlah = ($stokbaru + $stoklama);
        if($stokbaru == null){
            return back()->with('tidakadaperubahan','update databerhasil');

        }
        else
        {
            $databaru = DB::table('BARANG')
            ->where('BARANG_ID',$id)
            ->update(['BARANG_JUMLAH' => $totaljumlah]);

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();

            $transdet = BARANG::join('SUPPLIER', 'BARANG.SUPPLIER_ID', '=', 'SUPPLIER.SUPPLIER_ID')
            ->select('BARANG_NAMA','BARANG_ID','BARANG_KATEGORI_ID','SUPPLIER_NAMA','BARANG_HARGA_JUAL','BARANG_HARGA_BELI','BARANG_JUMLAH','BARANG_KATEGORI')->where('BARANG_ID', $id)->get();

            return back()->with('berhasilditambah','update databerhasil');
        }
    }

    //Add Product
    public function tableaddproduk(){


        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $supplier = DB::table('SUPPLIER')
        ->select('SUPPLIER_ID', 'SUPPLIER_NAMA')
        ->get();

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('addproduk', ["kategori" => $kategori,"tabel"=> $supplier]);
    }

    public function updatebarang(Request $req){
        $kategoribarang = $req->input('kategoriproduk');
        if($kategoribarang == "M01")
        {
            $produkbaru = new produkbaru();
            $produkbaru->BARANG_NAMA = $req->namaproduk;
            $produkbaru->BARANG_KATEGORI_ID = 'M01';
            $produkbaru->BARANG_KATEGORI = 'Minuman';
            $produkbaru->SUPPLIER_ID = $req->kategorisupplier;
            $produkbaru->BARANG_HARGA_BELI = $req->hargabeli;
            $produkbaru->BARANG_HARGA_JUAL = $req->hargajual;
            $produkbaru->BARANG_JUMLAH = $req->jumlah;
            $produkbaru->BARANG_DELETE = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new produk();
            $tabel = $user->tableproduk();

            $supplier = DB::table('SUPPLIER')
            ->select('SUPPLIER_ID', 'SUPPLIER_NAMA')
            ->get();

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();
            return back()->with('berhasil','udpate data berhasil');
            // return view('produk',compact(['tabel']), ["kategori" => $kategori,"tabel"=> $supplier]);
        }
        else if($kategoribarang == "M02"){
            $produkbaru = new produkbaru();
            $produkbaru->BARANG_NAMA = $req->namaproduk;
            $produkbaru->BARANG_KATEGORI_ID = 'M02';
            $produkbaru->BARANG_KATEGORI = 'Makanan';
            $produkbaru->SUPPLIER_ID = $req->kategorisupplier;
            $produkbaru->BARANG_HARGA_BELI = $req->hargabeli;
            $produkbaru->BARANG_HARGA_JUAL = $req->hargajual;
            $produkbaru->BARANG_JUMLAH = $req->jumlah;
            $produkbaru->BARANG_DELETE = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();
            return view('produk',compact(['tabel']), ["kategori" => $kategori]);
        }
        else if($kategoribarang == "R01"){
            $produkbaru = new produkbaru();
            $produkbaru->BARANG_NAMA = $req->namaproduk;
            $produkbaru->BARANG_KATEGORI_ID = 'R01';
            $produkbaru->BARANG_KATEGORI = 'Rokok';
            $produkbaru->SUPPLIER_ID = $req->kategorisupplier;
            $produkbaru->BARANG_HARGA_BELI = $req->hargabeli;
            $produkbaru->BARANG_HARGA_JUAL = $req->hargajual;
            $produkbaru->BARANG_JUMLAH = $req->jumlah;
            $produkbaru->BARANG_DELETE = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();
            return view('produk',compact(['tabel']), ["kategori" => $kategori]);
        }
        else if($kategoribarang == "B01"){
            $produkbaru = new produkbaru();
            $produkbaru->BARANG_NAMA = $req->namaproduk;
            $produkbaru->BARANG_KATEGORI_ID = 'B01';
            $produkbaru->BARANG_KATEGORI = 'Bahan Pokok';
            $produkbaru->SUPPLIER_ID = $req->kategorisupplier;
            $produkbaru->BARANG_HARGA_BELI = $req->hargabeli;
            $produkbaru->BARANG_HARGA_JUAL = $req->hargajual;
            $produkbaru->BARANG_JUMLAH = $req->jumlah;
            $produkbaru->BARANG_DELETE = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();
            return view('produk',compact(['tabel']), ["kategori" => $kategori]);
        }
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new produk();
        $tabel = $user->tableproduk();
        return view("produk");
    }

    public function filterdrop(Request $req)
    {

        $validated = $req->validate([
            'filter' => 'required|string'
        ]);

        $filter = $req->filter;
        $user = new produk;
        $tabel = $user->filter($filter);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('produk',compact(['tabel']), ["kategori" => $kategori]);

    }
}
