<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as FacadesDB;

class keuangan extends Model
{
    use HasFactory;
    public function tableKeuangan(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`, B.BARANG_HARGA_BELI AS `HARGA_SATUAN`, DTJ.JUAL_HARGA_SATUAN AS `UANG_MASUK`, SUM(DTJ.JUAL_HARGA_SATUAN - (B.BARANG_HARGA_BELI * DTJ.JUAL_JUMLAH)) AS `Laba` ".
        "FROM BARANG B, DETAIL_TRANS_JUAL DTJ ".
        "WHERE B.BARANG_ID = DTJ.BARANG_ID ".
        "GROUP BY `NAMA_BARANG`;";

        //$value 1 = "coding barang sembako"
        //if ($value == "Sembako"){
        //
        //}

        $meja = DB::select($value);
       
        return $meja;
    }
}
