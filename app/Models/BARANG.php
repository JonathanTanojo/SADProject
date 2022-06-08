<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\SUPPLIERALL;

class BARANG extends Model
{
    use HasFactory;
    protected $table = "BARANG";

    public $primaryKey = "BARANG_ID";

    public $incrementing = false;

    public $timestamps = false;

    public function tablekategori(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT BARANG_KATEGORI_ID,BARANG_KATEGORI FROM SAD_BAGHIZ.BARANG GROUP BY BARANG_KATEGORI;";

        $kategori = DB::select($value);
        return $kategori;
    }

}
