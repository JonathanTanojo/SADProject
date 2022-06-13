<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    use HasFactory;
    public function tableproduk(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_HARGA_BELI AS `Harga_Beli`,BARANG_HARGA_JUAL AS `Harga_Jual`, BARANG_JUMLAH AS `Jumlah` FROM BARANG WHERE BARANG_DELETE = 0;";

        $produk = DB::select($value);
        return $produk;
    }

    public function insert($data){
        $run = DB::select('SELECT fungsibarang(:namaproduk) as id',$data);
        return $run;
    }

    public function filter($filter){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_HARGA_BELI AS `Harga_Beli`,BARANG_HARGA_JUAL AS `Harga_Jual`, BARANG_JUMLAH AS `Jumlah` FROM BARANG WHERE BARANG_DELETE = 0 AND BARANG_KATEGORI_ID ='".$filter."';";
        $produk = DB::select($value);
        return $produk;
    }
}
