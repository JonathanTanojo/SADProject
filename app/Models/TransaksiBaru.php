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

    public function show(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT DTJ.ID_JUAL AS `ID`, TJ.JUAL_TANGGAL AS `TANGGAL`, DTJ.JUAL_JUMLAH AS `JUMLAH`, DTJ.TOTAL AS `TOTAL` ".
        "FROM TRANSAKSI_JUAL TJ, DETAIL_TRANS_JUAL DTJ, BARANG B ".
        "WHERE TJ.JUAL_ID = DTJ.ID_JUAL AND DTJ.BARANG_ID = B.BARANG_ID ".
        "ORDER BY `ID` ;";      
        $riwayat = DB::select($value);

        return $riwayat;
    }
}
