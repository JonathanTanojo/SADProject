<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiBaru extends Model
{
    use HasFactory;
    public function tabletransaksibaru(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT barang_nama as `Nama Barang`, barang_harga_jual as `Harga` FROM BARANG b WHERE BARANG_NAMA LIKE '%%';";

        $latest = DB::select($value);
        return $latest;
    }
}
