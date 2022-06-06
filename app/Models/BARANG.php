<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BARANG extends Model
{
    use HasFactory;
    protected $table = "BARANG";


    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;

    public function tableproduk(){
         $value = "SELECT b.BARANG_ID AS `ID`,BARANG_NAMA AS `Barang`, BARANG_KATEGORI AS `Kategori`, BARANG_PRICE AS `Harga_Beli`, BARANG_PRICE AS `Harga_Jual`, BARANG_QTY AS `Jumlah`,SUPPLIER_NAMA as `NamaSupplier` FROM BARANG b, SUPPLIER s WHERE b.SUPPLIER_ID = s.SUPPLIER_ID;";

         $produk = DB::select($value);
         return $produk;
     }
}
