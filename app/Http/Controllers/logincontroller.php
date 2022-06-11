<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function viewlogin(){
        return view('login');
    }

    public function login(Request $req){
        $username = $_POST['user'];
        $password = $req->input('password');
        $data = [
            'user' => $username,
            'password' => $password
        ];

        $user = new login;
        $flag_exist = $user->isExist($username,$password);


        if ($flag_exist == true){
            Session::put('login', $user);
            Session::put('pass', $password);
            // $req->session()->flash('authentication');

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
            $run = DB::select($server);
            $kategori = DB::table('BARANG')
            ->select('BARANG_KATEGORI_ID', 'BARANG_KATEGORI')
            ->groupBy('BARANG_KATEGORI')
            ->get();

            $user = new produk();
            $tabel = $user->tableproduk();
            return view('produk',compact(['tabel']), ["kategori" => $kategori]);
        }
        else {
            Session::flash('error', "Invalid signin, please try again");
            return redirect('/');
        }

    }
    public function regis(Request $req){

        $messages = array();
        $user = $_POST['user'];
        $password = $_POST['password'];

        $data = [
            'user' => $user,
            'password' => $password
        ];

        $user = New login();
        $flag_exist = $user->insert($data);


    }
    public function logout(Request $req){
        Session::flush();
        return redirect('/');
    }
}
