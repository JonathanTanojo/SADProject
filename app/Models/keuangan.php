<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class keuangan extends Model
{
    use HasFactory;
    public function tableKeuangan(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`, DTJ.JUAL_HARGA_SATUAN * SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,  (DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH)-B.BARANG_HARGA_BELI*SUM(DTJ.JUAL_JUMLAH)) AS `Laba` FROM BARANG B, DETAIL_TRANS_JUAL DTJ WHERE B.BARANG_ID = DTJ.BARANG_ID GROUP BY `NAMA_BARANG`";

        //$value 1 = "coding barang sembako"
        //if ($value == "Sembako"){
        //
        //}

        $meja = DB::select($value);

        return $meja;
    }
    public function detailKeuangan(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, B.BARANG_HARGA_BELI AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`,SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,B.BARANG_JUMLAH-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`, DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,  (DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH)-B.BARANG_HARGA_BELI*SUM(DTJ.JUAL_JUMLAH)) AS `Laba` FROM BARANG B, DETAIL_TRANS_JUAL DTJ WHERE B.BARANG_ID = DTJ.BARANG_ID GROUP BY `NAMA_BARANG` ORDER BY 'TERJUAL' DESC";

        $meja = DB::select($value);

        return $meja;
    }

    public function tarikanmaut($tglawal){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, B.BARANG_HARGA_BELI AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`,SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,B.BARANG_JUMLAH-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`, DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,  (DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH)-B.BARANG_HARGA_BELI*SUM(DTJ.JUAL_JUMLAH)) AS `Laba`,TJ.JUAL_TANGGAL AS `TANGGAL`FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_JUAL TJ WHERE B.BARANG_ID = DTJ.BARANG_ID AND TJ.JUAL_TANGGAL = '".$tglawal."' AND TJ.JUAL_ID = DTJ.ID_JUAL GROUP BY `NAMA_BARANG` ORDER BY 'TERJUAL' DESC";
        $meja = DB::select($value);

        return $meja;
    }
    public function caribarang($namabarang){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = " SELECT B.BARANG_NAMA AS `NAMA_BARANG`, B.BARANG_HARGA_BELI AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`,SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,B.BARANG_JUMLAH-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`, DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,  (DTJ.JUAL_HARGA_SATUAN *SUM(DTJ.JUAL_JUMLAH)-B.BARANG_HARGA_BELI*SUM(DTJ.JUAL_JUMLAH)) AS `Laba`,TJ.JUAL_TANGGAL AS `TANGGAL` FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_JUAL TJ WHERE B.BARANG_ID = DTJ.BARANG_ID AND B.BARANG_NAMA LIKE '%$namabarang%' AND TJ.JUAL_ID = DTJ.ID_JUAL GROUP BY `NAMA_BARANG` ORDER BY 'TERJUAL' DESC";
        $meja = DB::select($value);

        return $meja;
    }
}
