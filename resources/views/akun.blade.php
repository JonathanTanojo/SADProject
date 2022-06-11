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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
                <div class="judul col-6" style="position: absolute; margin-left: 8%;padding-top:19px;font-size: 29px;font-weight: 600;color: white;">
                    <p>Akun Profil</p>
                </div>
                <div class="logo col-12" style="position: absolute; top: 80px;right: 5px;">
                    <img src="img/logo.png" alt="">
                </div>
            </div>
            @if (Session::get('status'))
            <div class="alert alert-success alert-dismissible" style="margin-top:18px; position:absolute; float:left;">
                {{ Session::get('status') }}
                <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="close" style="float:right;padding-left:7px;font-size:22px" title="close">×</a>
                 </div>
            @endif
            <div class="kontendata col-12" style="margin-top: 55px; margin-left: 36px;">
                <form action="/userupdate" method="POST">
                    {{csrf_field()}}
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
                    @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible" style="margin-top:18px; position:absolute; float:left;">
                        {{ Session::get('success') }}
                        <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="close" style="float:right;padding-left:7px;font-size:22px" title="close">×</a>

                      </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:18px; position:absolute; float:left;">
                        {{ Session::get('fail') }}
                        <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="close" style="float:right;padding-left:7px;font-size:22px" title="close">×</a>
                      </div>
                    @endif
                    @if (Session::get('fail2'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:18px; position:absolute; float:left;">
                        {{ Session::get('fail2') }}
                        <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="close" style="float:right;padding-left:7px;font-size:22px" title="close">×</a>
                      </div>
                    @endif
                    @if (Session::get('fail3'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:18px; position:absolute; float:left;">
                        {{ Session::get('fail3') }}
                        <a href="#" class="close" onclick="this.parentElement.style.display='none';" data-dismiss="alert" aria-label="close" style="float:right;padding-left:7px;font-size:22px" title="close">×</a>

                      </div>
                    @endif
                    <div class="button col-10" >
                        <input type="button" value="Ubah Profil" id="ubah_profil" class="" onclick="UbahProfil()" style="margin-right: 11px;">

                        <input type="submit" value="Simpan" class="btn-update" id="simpan" style="margin-right:-140px; background-color:#23A042; visibility: hidden;">
                        <input type="button" value="Batal" class="btn-betal" id="batal" onclick="UbahProfilBalik()" style="margin-right: 11px; background-color: #FF0000; visibility: hidden;">
                    </div>
                </form>
            </div>

            <div class="kontendata col-12" style="margin-top: 10px;margin-left: 36px;">
                <form action="{{route('passwordupdate')}}" method="POST" id="change-password-form">
                    @csrf
                    <div class="judul col-6">
                        <label for="">
                            Kata Sandi Baru
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="password" name="Kata_Sandi_Baru" id="passbaru" placeholder="Masukkan Password Baru" readonly>
                        <span style="color: red">@error('Kata_Sandi_Baru'){{ $message }}@enderror</span>
                    </div>
                    <div class="judul col-12">
                        <label for="">
                            Ulangi Kata Sandi Baru
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="password" name="Ulangi_Kata_Sandi" id="passkonfirm" placeholder="Ulangi Password Baru"  readonly>
                        <span style="color: red">@error('Ulangi_Kata_Sandi'){{ $message }}@enderror</span>
                    </div>
                    <div class="buttonpassword col-10" style="display: flex" >
                        <input class="col-4" type="button" id="ubahpassword" value="Ubah Password" onclick="UbahPassword()"  style="margin-right: 11px;" >
                        <input class="col-4" type="button" id="batalpass" value="Batal" onclick="UbahPasswordBalik()" style="margin-right: 11px; background-color: #FF0000; visibility: hidden;">

                        <input class="col-4" type="submit" id="simpanpass" value="Simpan"  style="margin-right:-291px; background-color:#23A042;  visibility: hidden; ">
                </form>
            </div>
            <div class="logout col-12">
                <form action="">
                    @csrf
                    <a>
                        <input id="keluar" type="button" onclick="Logout() value="Keluar Akun" >
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
