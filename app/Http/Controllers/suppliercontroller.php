<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use App\Models\SUPPLIERALL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class suppliercontroller extends Controller
{
    public function tableproduk(){
        $user = new supplier();
        $tabel = $user->tableproduk();

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('supplier',compact(['tabel']), ["kategori" => $kategori]);
    }

    //Add Supplier
    public function tableaddsupplier(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('addsupplier', ["kategori" => $kategori]);
    }
    public function updatesupplier(Request $req){
        $kategoribarang = $req->input('kategorisupplier');

        if($kategoribarang == "M01")
        {
            $supplierbaru = new SUPPLIERALL();
            $supplierbaru->SUPPLIER_NAMA = $req->namasupplier;
            $supplierbaru->SUPPLIER_KATEGORI_ID = 'M01';
            $supplierbaru->SUPPLIER_KATEGORI = 'Minuman';
            $supplierbaru->SUPPLIER_NOTLP = $req->notlp;
            $supplierbaru->SUPPLIER_ALAMAT = $req->alamat;
            $supplierbaru->SUPPLIER_DELETE = '0';
            $supplierbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new supplier();
             $tabel = $user->tableproduk();
            return view('supplier',compact(['tabel']), ["kategori" => $kategori]);
        }
        else if($kategoribarang == "M02"){
            $supplierbaru = new SUPPLIERALL();
            $supplierbaru->SUPPLIER_NAMA = $req->namasupplier;
            $supplierbaru->SUPPLIER_KATEGORI_ID = 'M02';
            $supplierbaru->SUPPLIER_KATEGORI = 'Makanan';
            $supplierbaru->SUPPLIER_NOTLP = $req->notlp;
            $supplierbaru->SUPPLIER_ALAMAT = $req->alamat;
            $supplierbaru->SUPPLIER_DELETE = '0';
            $supplierbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new supplier();
            $tabel = $user->tableproduk();
            return view('supplier',compact(['tabel']), ["kategori" => $kategori]);
        }
        else if($kategoribarang == "R01"){
            $supplierbaru = new SUPPLIERALL();
            $supplierbaru->SUPPLIER_NAMA = $req->namasupplier;
            $supplierbaru->SUPPLIER_KATEGORI_ID = 'R01';
            $supplierbaru->SUPPLIER_KATEGORI = 'Rokok';
            $supplierbaru->SUPPLIER_NOTLP = $req->notlp;
            $supplierbaru->SUPPLIER_ALAMAT = $req->alamat;
            $supplierbaru->SUPPLIER_DELETE = '0';
            $supplierbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new supplier();
            $tabel = $user->tableproduk();
            return view('supplier',compact(['tabel']), ["kategori" => $kategori]);
        }
        else if($kategoribarang == "B01"){
            $supplierbaru = new SUPPLIERALL();
            $supplierbaru->SUPPLIER_NAMA = $req->namasupplier;
            $supplierbaru->SUPPLIER_KATEGORI_ID = 'B01';
            $supplierbaru->SUPPLIER_KATEGORI = 'Bahan Pokok';
            $supplierbaru->SUPPLIER_NOTLP = $req->notlp;
            $supplierbaru->SUPPLIER_ALAMAT = $req->alamat;
            $supplierbaru->SUPPLIER_DELETE = '0';
            $supplierbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new supplier();
            $tabel = $user->tableproduk();
            return view('supplier',compact(['tabel']), ["kategori" => $kategori]);
        }

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new supplier();
        $tabel = $user->tableproduk();
        return view("supplier",["kategori" => $kategori],compact(['tabel']));
    }
    //Search inputbox
    public function searchsupplier(Request $req){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $input = $req -> input('search');

        $search = DB::table('SUPPLIER')
        ->select('SUPPLIER_NAMA AS NamaSupplier','SUPPLIER_ID AS ID', 'SUPPLIER_KATEGORI AS Kategori', 'SUPPLIER_NOTLP AS notlp','SUPPLIER_ALAMAT AS alamat', 'SUPPLIER_DELETE AS DELETE')
        ->where('SUPPLIER_NAMA','like', '%'.$input.'%')
        ->where('SUPPLIER_DELETE','=',0)
        ->get();

        return view('supplier',
        [
            "tabel" => $search,
            "kategori" => $kategori
        ]);
    }
    //Filter Combobox
    public function filterdrop(Request $req)
    {
        $validated = $req->validate([
            'filter' => 'required|string'
        ]);

        $filter = $req->filter;
        $user = new supplier();
        $tabel = $user->filter($filter);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return view('supplier',compact(['tabel']), ["kategori" => $kategori]);

    }
    //Detail Supplier
    public function details($id,Request $req) {
        $item = SUPPLIERALL::query()->find($id);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();


        return view('editsupplier',["i" => $item],["kategori" => $kategori]);
    }
    //Update Data Supplier
    public function updatedatasupplier($id,Request $req){

        $namasupplier = $req->input('namasupplier');
        $kategorisupplier = $req->input('kategorisupplier');
        $notlp = $req->input('notlp');
        $alamat = $req->input('alamat');
        //dd($kategorisupplier);
        if($kategorisupplier == "M01")
        {
            $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_NAMA' => $namasupplier,
              'SUPPLIER_KATEGORI_ID' => $kategorisupplier,
              'SUPPLIER_KATEGORI' => 'Minuman',
              'SUPPLIER_NOTLP' => $notlp,
              'SUPPLIER_ALAMAT' => $alamat]);
        }
        else if($kategorisupplier == "M02"){
            $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_NAMA' => $namasupplier,
              'SUPPLIER_KATEGORI_ID' => $kategorisupplier,
              'SUPPLIER_KATEGORI' => 'Makanan',
              'SUPPLIER_NOTLP' => $notlp,
              'SUPPLIER_ALAMAT' => $alamat]);
        }
        else if($kategorisupplier == "R01"){
            $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_NAMA' => $namasupplier,
              'SUPPLIER_KATEGORI_ID' => $kategorisupplier,
              'SUPPLIER_KATEGORI' => 'Rokok',
              'SUPPLIER_NOTLP' => $notlp,
              'SUPPLIER_ALAMAT' => $alamat]);
        }
        else if($kategorisupplier == "B01"){
            $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_NAMA' => $namasupplier,
              'SUPPLIER_KATEGORI_ID' => $kategorisupplier,
              'SUPPLIER_KATEGORI' => 'Bahan Pokok',
              'SUPPLIER_NOTLP' => $notlp,
              'SUPPLIER_ALAMAT' => $alamat]);
        }
        else{
            $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_NAMA' => $namasupplier,
              'SUPPLIER_KATEGORI_ID' => $kategorisupplier,
              'SUPPLIER_KATEGORI' => 'Makanan',
              'SUPPLIER_NOTLP' => $notlp,
              'SUPPLIER_ALAMAT' => $alamat]);
        }
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new supplier();
        $tabel = $user->tableproduk();

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        // return view('editproduk',
        // compact(['tabel']),
        // ["kategori" => $kategori,
        // "datadetail" => $transdet,]);
        return back()->with('berhasil','udpate data berhasil');

    }
    public function hapusupplier($id,Request $req){
        $databaru = DB::table('SUPPLIER')
              ->where('SUPPLIER_ID',$id)
              ->update([
              'SUPPLIER_DELETE' => '1'
              ]);

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);

        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        $user = new supplier();
        $tabel = $user->tableproduk();

        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $kategori = DB::table('BARANG')
        ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
        ->groupBy('BARANG_KATEGORI')
        ->get();

        return back()->with('hapus','udpate data berhasil');

    }
}
