<?php

namespace App\Http\Controllers;

use App\Models\akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Session;

class akuncontroller extends Controller
{
    public function tableakun(){
        $akun = new akun();
        $tabel = $akun->tableakun();
        return view('akun',compact(['tabel']));
    }
    public function userupdate( Request $request){
        $userupdate = [
            'USER_ID'       => 'B0001',
            'USER_NAMA'     =>  $request->nama,
            'USER_NOTLP'    =>  $request->nomor,
            'USER_ALAMAT'   =>  $request->alamat
        ];
        DB::table('PENGGUNA')->where('USER_ID','B0001')->update($userupdate);
        return back()->with('status','Profil Berhasil Diubah!');
        //return redirect()->back()->with('userupdate','.');

    }
    public function passwordupdate( Request $request ){
        $passbaru = $request -> input("Kata_Sandi_Baru");
        $passbarukedua = $request -> input("Ulangi_Kata_Sandi");
        if($passbaru == $passbarukedua){

            DB::table('PENGGUNA')->where('USER_ID','B0001')->update([
                'USER_KATASANDI' => ($request->Kata_Sandi_Baru)
            ]);
            return back()->with('success','Kata Sandi Berhasil Diubah!');
        }
        elseif($passbaru=="" ){
            return back()->with('fail2','Kata Sandi Baru Harap Diisi!');
        }
        elseif($passbarukedua=="" ){
            return back()->with('fail3','Ulangi Kata Sandi Harap Diisi!');
        }
        else{
            return back()->with('fail','Kata Sandi dan Konfirmasi tidak sama!');
        }

        // $request->validate([
        //     'Ulangi_Kata_Sandi'=>'required',
        // ]);
        // dd($request->all());
        //return redirect()->back()->with('error','Kata Sandi dan Konfirmasi tidak sama!');
    //return back()->with("status", "Password changed successfully!");
    //return redirect()->back()->with('passwordupdate','.');
        // User::find->id)->update([
        //     'password'=> Hash::make($request->new_password)]);

        // User::where('USER_ID','B0001')->update([
        //     'USER_KATASANDI' => Hash::make($request->passbaru)
        // ]);
        // dd('Password change successfully.');
        //return back()->with("status", "Kata Sandi Berhasil Diubah!");
        // $passbaru = $request -> input("passbaru");
        // $passbarukedua = $request -> input("passkonfirm");

        // if($passbaru == $passbarukedua){
        //     dd($passbaru);
        // }
        // else{
        //     return view('keuangan');
        // }
        // dd($request->all());
    }
}
