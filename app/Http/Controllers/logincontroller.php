<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    function __construct()
    {
        $this->login= new login();
    }
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
            return redirect('/')->with('salahpass','Katasandisalah');;
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

    public function autopass(Request $request) {
        $statMaknan = $this->login->cek_makanan($request);
        if(isset($statMaknan)){
            DB::table('PENGGUNA')->where('USER_ID','B0001')->update([
                'USER_KATASANDI' => ('123')
            ]);
            return redirect('/')->with('autopass','Kata sandi diubah menjadi "123"');
        }else{
            return back()->with('fail0','Input makanan salah!');
        }
    }
}
