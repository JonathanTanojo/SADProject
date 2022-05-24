<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    use HasFactory;
    public function tableKeuangan(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, DTJ.QTY_JUAL AS `TERJUAL`, B.BARANG_PRICE AS `HARGA_SATUAN`, DTJ.HARGA_JUAL AS `UANG_MASUK`, SUM(DTJ.HARGA_JUAL - (B.BARANG_PRICE * DTJ.QTY_JUAL)) AS `Laba` ".
        "FROM BARANG B, DETAIL_TRANS_JUAL DTJ ".
        "WHERE B.BARANG_ID = DTJ.BARANG_ID ".
        "GROUP BY `NAMA_BARANG`;";

        $meja = DB::select($value);
        return $meja;
    }
}
