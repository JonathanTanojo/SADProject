<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class akun extends Model
{
    use HasFactory;
    public function tableakun(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT USER_NAMA AS `Nama`, IF(USER_STATUS=1,'Pemilik','Pegawai') AS `Status`, USER_NOTLP AS `Nomor_Telepon`, USER_ALAMAT AS `Alamat` FROM `PENGGUNA`;";

        $akun = DB::select($value);
        return $akun;
    }
}
