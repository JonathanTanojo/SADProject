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
                        <input type="text" name="" id="" value="Bily Jefferson" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Status
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" value="Pemilik" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            No. HP
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="" id="" value="082233638839" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Alamat
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" value="Jl. Arif Rahman Hakim No.01 Gresik" readonly>
                    </div>
                    <div class="button col-10" >
                        <input type="button" value="Ubah Profil" style="margin-right: 11px;">
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
                        <input type="text" name="" id="" value="Bily Jefferson" readonly>
                    </div>
                    <div class="judul col-12">
                        <label for="">
                            Ulangi Kata Sandi Baru
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" value="Pemilik" readonly>
                    </div>
                    <div class="buttonpassword col-10" >
                        <input type="button" value="Ubah Password" style="margin-right: 11px;">
                    </div>
                </form>
            </div>
            <div class="logout col-12">
                <form action="">
                    @csrf
                    <input type="button" value="Keluar Akun">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

</body>
</html>
