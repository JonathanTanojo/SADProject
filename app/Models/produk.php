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
        $value = "SELECT BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_PRICE AS `Harga_Beli`, BARANG_PRICE AS `Harga_Jual`, BARANG_QTY AS `Jumlah`".
        "FROM BARANG;";

        $produk = DB::select($value);
        return $produk;
    }
}
