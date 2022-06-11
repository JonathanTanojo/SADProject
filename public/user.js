var BtnSimpan = document.getElementById("simpan");
var BtnBatal = document.getElementById("batal");
var BtnProfil = document.getElementById("ubah_profil");
var LblNama =  document.getElementById('nama');
// var Status =  document.getElementById('status');
var Nomor =  document.getElementById('nomor');
var Alamat =  document.getElementById('alamat');

var BtnPassword =  document.getElementById('ubahpassword');
var BtnBatal2 = document.getElementById("batalpass");
var BtnSimpan2 = document.getElementById("simpanpass");
var LblPassBaru = document.getElementById("passbaru");
var LblPassKonfirm= document.getElementById("passkonfirm");

var BtnLogout =  document.getElementById('keluar');

function UbahProfil() {

    BtnProfil.style.visibility = "hidden";
    BtnBatal.style.visibility = "visible";
    BtnSimpan.style.visibility = "visible";
    BtnPassword.style.disabled = true;
    LblNama.readOnly=false;
    LblNama.style.backgroundColor= '#ffffff';
    Nomor.readOnly=false;
    Nomor.style.backgroundColor= '#ffffff';
    Alamat.readOnly=false;
    Alamat.style.backgroundColor= '#ffffff';
    BtnPassword.disabled = true;

  }
  function UbahProfilBalik(){
    BtnProfil.style.visibility = "visible";
    BtnBatal.style.visibility = "hidden";
    BtnSimpan.style.visibility = "hidden";
    LblNama.readOnly=true;
    LblNama.style.backgroundColor= '#EEEEEE';
    Nomor.readOnly=true;
    Nomor.style.backgroundColor= '#EEEEEE';
    Alamat.readOnly=true;
    Alamat.style.backgroundColor= '#EEEEEE';
    BtnPassword.disabled = false;
  }

function UbahPassword(){
    BtnPassword.style.visibility = "hidden";
    BtnBatal2.style.visibility = "visible";
    BtnSimpan2.style.visibility = "visible";
    LblPassBaru.readOnly=false;
    LblPassBaru.style.backgroundColor= '#ffffff';
    LblPassKonfirm.readOnly=false;
    LblPassKonfirm.style.backgroundColor= '#ffffff';
    BtnProfil.disabled = true;
}
function UbahPasswordBalik(){
    BtnPassword.style.visibility = "visible";
    BtnBatal2.style.visibility = "hidden";
    BtnSimpan2.style.visibility = "hidden";
    LblPassBaru.readOnly=true;
    LblPassBaru.style.backgroundColor= '#EEEEEE';
    LblPassKonfirm.readOnly=true;
    LblPassKonfirm.style.backgroundColor= '#EEEEEE';
    BtnProfil.disabled = false;
    LblPassBaru.value="";
    LblPassKonfirm.value="";
}
function Logout(){
    
}
