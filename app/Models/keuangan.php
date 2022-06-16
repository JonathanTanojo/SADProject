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
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,SUM(TB.BELI_JUMLAH)-SUM(DTJ.JUAL_JUMLAH) AS `Sisa`, DTJ.JUAL_HARGA_SATUAN * SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,
        ((B.BARANG_HARGA_JUAL - ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)))*SUM(DTJ.JUAL_JUMLAH)) AS `Laba`
              FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_PEMBELIAN TB
              WHERE B.BARANG_ID = DTJ.BARANG_ID AND B.BARANG_ID = TB.BARANG_ID
              GROUP BY B.BARANG_ID
              ORDER BY 'Terjual' DESC";

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
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `HARGA_SATUAN`,
        SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,SUM(TB.BELI_JUMLAH)-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, DTJ.JUAL_HARGA_SATUAN * SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,
          ((B.BARANG_HARGA_JUAL - ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)))*SUM(DTJ.JUAL_JUMLAH)) AS `Laba`
                FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_PEMBELIAN TB
                WHERE B.BARANG_ID = DTJ.BARANG_ID AND B.BARANG_ID = TB.BARANG_ID
                GROUP BY B.BARANG_ID
                ORDER BY 'Terjual' DESC";

        $meja = DB::select($value);

        return $meja;
    }

    public function tarikanmaut($tglawal){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `Harga Jual`,
        SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,SUM(TB.BELI_JUMLAH)-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, DTJ.JUAL_HARGA_SATUAN * SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,
          ((B.BARANG_HARGA_JUAL - ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)))*SUM(DTJ.JUAL_JUMLAH)) AS Laba
                FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_PEMBELIAN TB, TRANSAKSI_JUAL TJ
                WHERE B.BARANG_ID = DTJ.BARANG_ID AND B.BARANG_ID = TB.BARANG_ID AND DTJ.ID_JUAL=TJ.JUAL_ID AND TJ.JUAL_TANGGAL = '".$tglawal."'
                GROUP BY B.BARANG_ID
                ORDER BY 'Terjual' DESC;";
        $meja = DB::select($value);

        return $meja;
    }
    //Detail Laporan Barang
    public function caribarang($namabarang){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_NAMA AS `NAMA_BARANG`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `HARGA_BELI`, B.BARANG_HARGA_JUAL AS `Harga Jual`,
        SUM(DTJ.JUAL_JUMLAH) AS `TERJUAL`,SUM(TB.BELI_JUMLAH)-SUM(DTJ.JUAL_JUMLAH) AS `SISA`, DTJ.JUAL_HARGA_SATUAN * SUM(DTJ.JUAL_JUMLAH) AS `UANG_MASUK`,
          ((B.BARANG_HARGA_JUAL - ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)))*SUM(DTJ.JUAL_JUMLAH)) AS `Laba`
                FROM BARANG B, DETAIL_TRANS_JUAL DTJ, TRANSAKSI_PEMBELIAN TB, TRANSAKSI_JUAL TJ
                WHERE B.BARANG_ID = DTJ.BARANG_ID AND B.BARANG_ID = TB.BARANG_ID AND DTJ.ID_JUAL=TJ.JUAL_ID AND B.BARANG_NAMA LIKE '%$namabarang%'
                GROUP BY B.BARANG_ID
                ORDER BY 'Terjual' DESC";
        $meja = DB::select($value);

        return $meja;
    }
}
