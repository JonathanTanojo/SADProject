<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class supplier extends Model
{
    use HasFactory;
    public function tableproduk(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT SUPPLIER_ID AS `ID`,SUPPLIER_NAMA AS `NamaSupplier`, SUPPLIER_KATEGORI as `Kategori`, SUPPLIER_NOTLP `notlp`, SUPPLIER_ALAMAT AS `alamat` FROM `SUPPLIER` WHERE SUPPLIER_DELETE = 0 ";

        $supplier = DB::select($value);
        return $supplier;
    }
    public function filter($filter){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT SUPPLIER_ID AS `ID`,SUPPLIER_NAMA AS `NamaSupplier`, SUPPLIER_KATEGORI as `Kategori`, SUPPLIER_NOTLP `notlp`, SUPPLIER_ALAMAT AS `alamat` FROM `SUPPLIER` WHERE SUPPLIER_DELETE = 0  AND SUPPLIER_KATEGORI_ID ='".$filter."';";

        $supplierdata = DB::select($value);
        return $supplierdata;
    }
}
