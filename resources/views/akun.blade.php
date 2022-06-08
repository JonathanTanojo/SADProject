<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="akuncss.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Stok Produk</title>
</head>
<body>
    @include("nuser")
    <div class="container">
        <div class="backgroundcolor-ungumudah" style="border-radius: 10px;background-color: #F3F1FF; height: 100vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="backgroundcolor-ungutua" style="border-radius: 10px;background-color: #665DB6; height: 14vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
                <div class="judul col-6" style="margin-left: 8%;padding-top:19px;font-size: 29px;font-weight: 600;color: white;">
                    <p>Akun Profil</p>
                </div>
                <div class="logo col-12" style="position: absolute;">
                    <img src="img/logo.png" alt="">
                </div>
            </div>
            <div class="kontendata col-12" style="margin-top: 55px;margin-left: 36px;">
                <form action="">
                    @csrf
                    <div class="judul col-4">
                        <label for="">
                            Nama
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="nama" id="nama" value="{{$tabel[0]->Nama}}" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Status
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="status" id="status" value="{{$tabel[0]->Status}}" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            No. HP
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="nomor" id="nomor" value="{{$tabel[0]->Nomor_Telepon}}" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Alamat
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="alamat" id="alamat" value="{{$tabel[0]->Alamat}}" readonly>
                    </div>
                    <div class="button col-10" >
                        <input type="button" value="Ubah Profil" id="ubah_profil" class="" onclick="UbahProfil()" style="margin-right: 11px;">
                        <input type="button" value="Simpan" class="btn-update" id="simpan" style="margin-right:-140px; background-color:chartreuse; visibility: hidden;">
                        <input type="button" value="Batal" class="btn-betal" id="batal" onclick="UbahProfilBalik()" style="margin-right: 11px; background-color:red; visibility: hidden;">
                    </div>
                </form>
            </div>
            <div class="kontendata col-12" style="margin-top: 10px;margin-left: 36px;">
                <form action="">
                    @csrf
                    <div class="judul col-6">
                        <label for="">
                            Kata Sandi Baru
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="passbaru" id="passbaru" value="Bily Jefferson" readonly>
                    </div>
                    <div class="judul col-12">
                        <label for="">
                            Ulangi Kata Sandi Baru
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="passkonfirm" id="passkonfirm" value="Pemilik" readonly>
                    </div>
                    <div class="buttonpassword col-10" style="display: flex" >
                        <input class="col-4" type="button" id="ubahpassword" value="Ubah Password" onclick="UbahPassword()"  style="margin-right: 11px;" >
                        <input class="col-4" type="button" id="batalpass" value="Batal" onclick="UbahPasswordBalik()" style="margin-right: 11px; background-color:red; visibility: hidden;">
                        <input class="col-4" type="button" id="simpanpass" value="Simpan"  style="margin-right:-291px; background-color:chartreuse;  visibility: hidden; ">
                    </div>
                </form>
            </div>
            <div class="logout col-12">
                <form action="">
                    @csrf
                    <a href="/">
                        <input id="keluar" type="button" value="Keluar Akun" >
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="user.js"></script>

</body>
</html>
