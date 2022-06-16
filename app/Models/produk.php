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
        $value = "SELECT B.BARANG_ID AS `ID`,B.BARANG_NAMA AS `Barang`, B.BARANG_KATEGORI AS `Kategori`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `Harga_Beli`,B.BARANG_HARGA_JUAL AS `Harga_Jual`, SUM(TB.BELI_JUMLAH) AS `Jumlah`  FROM BARANG B, TRANSAKSI_PEMBELIAN TB WHERE BARANG_DELETE = 0 AND  B.BARANG_ID = TB.BARANG_ID group by B.BARANG_ID;";

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
        $value = "SELECT B.BARANG_ID AS `ID`,B.BARANG_NAMA AS `Barang`, B.BARANG_KATEGORI AS `Kategori`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `Harga_Beli`,B.BARANG_HARGA_JUAL AS `Harga_Jual`, SUM(TB.BELI_JUMLAH) AS `Jumlah`  FROM BARANG B, TRANSAKSI_PEMBELIAN TB WHERE BARANG_DELETE = 0 AND BARANG_KATEGORI_ID ='".$filter."' AND  B.BARANG_ID = TB.BARANG_ID group by B.BARANG_ID;";
        $produk = DB::select($value);
        return $produk;
    }

    public function search($search){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_ID AS `ID`,B.BARANG_NAMA AS `Barang`, B.BARANG_KATEGORI AS `Kategori`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `Harga_Beli`,B.BARANG_HARGA_JUAL AS `Harga_Jual`, SUM(TB.BELI_JUMLAH) AS `Jumlah`  FROM BARANG B, TRANSAKSI_PEMBELIAN TB WHERE BARANG_DELETE = 0 AND BARANG_NAMA LIKE '%".$search."%' AND  B.BARANG_ID = TB.BARANG_ID group by B.BARANG_ID;";

        $produk = DB::select($value);
        return $produk;
    }
    public function details($id){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT B.BARANG_ID AS `ID`,B.BARANG_NAMA AS `Barang`, B.BARANG_KATEGORI AS `Kategori`, ROUND(SUM(BELI_HARGABELI*BELI_JUMLAH)/SUM(BELI_JUMLAH)) AS `Harga_Beli`,B.BARANG_HARGA_JUAL AS `Harga_Jual`, SUM(TB.BELI_JUMLAH)  AS `Jumlah`,S.SUPPLIER_NAMA AS `NamaSupplier`  FROM BARANG B, TRANSAKSI_PEMBELIAN TB,SUPPLIER S WHERE BARANG_DELETE = 0 AND B.BARANG_ID LIKE '%".$id."%' AND  B.BARANG_ID = TB.BARANG_ID AND B.SUPPLIER_ID = S.SUPPLIER_ID group by B.BARANG_ID;";

        $produk = DB::select($value);

        return $produk;
    }
}
