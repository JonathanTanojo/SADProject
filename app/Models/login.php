<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    public function isExist($username, $password){
        $admin = "SELECT count(*) as count FROM PENGGUNA WHERE USERNAME= '".$username."' AND USER_KATASANDI= '".$password."';";
        $login = DB::select($admin);
        return $login;
    }
}
