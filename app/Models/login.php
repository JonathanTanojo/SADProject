<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class login extends Model
{
    use HasFactory;
    public function isExist($username, $password){
        $admin = "SELECT count(*) is_exist FROM PENGGUNA WHERE USERNAME= '".$username."' AND USER_KATASANDI= '".$password."';";

        $login = DB::select($admin);
        if($login[0]->is_exist == 1){
            return true;
        }
        return false;
    }
    public function cek_makanan($request) {
        if (DB::table('PENGGUNA')->where('USER_MAKANAN', '=',$request->makanan)->exists()){
            return DB::table('PENGGUNA')->where('USER_MAKANAN', '=',$request->makanan)->get();
        }
    }
}
