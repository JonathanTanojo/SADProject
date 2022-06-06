<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SUPPLIERALL extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "BARANG";


    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;

    public function tableproduk(){
        $value = "SELECT SUPPLIER_ID AS `ID`,SUPPLIER_NAMA AS `NamaSupplier`, SUPPLIER_KATEGORI as `Kategori`, SUPPLIER_NOTLP `notlp`, SUPPLIER_ALAMAT AS `alamat` FROM `SUPPLIER`";

        $produk = DB::select($value);
        return $produk;
    }
}
