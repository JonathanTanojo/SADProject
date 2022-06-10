function UbahProfil() {
    var BtnProfil = document.getElementById("ubah_profil");
    var LblNama =  document.getElementById('nama');
    var Status =  document.getElementById('status');
    var Nomor =  document.getElementById('nomor');
    var Alamat =  document.getElementById('alamat');

    BtnProfil.style.visibility = "hidden";
    LblNama.readOnly=false;
    LblNama.style.backgroundColor= '#ffffff';
    Status.readOnly=false;
    Status.style.backgroundColor= '#ffffff';
    Nomor.readOnly=false;
    Nomor.style.backgroundColor= '#ffffff';
    Alamat.readOnly=false;
    Alamat.style.backgroundColor= '#ffffff';


  }
