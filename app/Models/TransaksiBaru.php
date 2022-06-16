<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiBaru extends Model
{
    use HasFactory;

    protected $table = "KERANJANG";

    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;


    public function tabletransaksibaru(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT BARANG_NAMA as `Barang`, BARANG_HARGA_JUAL as `Harga` FROM BARANG;";

        $produk = DB::select($value);
        return $produk;
    }
}
