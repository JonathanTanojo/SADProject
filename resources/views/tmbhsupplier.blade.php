<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link href="{{ URL::asset('jcss.css') }}" rel="stylesheet" type="text/css" >
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    @if(Session('login'))
    @include("nproduk")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;padding-top:8px;padding-left:8px">
                <h4><b>Masukkan Produk Baru</b></h4>
            </div>
            <div class="kontendata col-11" style="margin-top: 25px;margin-left: 36px;">
                <form action="">
                    @csrf
                    <div class="judul col-5">
                        <label for="">
                            Nama Supplier
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" placeholder="Masukkan Nama Supplier">
                    </div>
                    <div class="judul col-5">
                        <label for="">
                            Kategori Supplier
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <select name="filter_produk_kategori" id="filter_produk" >
                            <option value="" selected disabled hidden>Pilih Kategori Produk</option>
                            <option value="mykgrg">Minyak Goreng</option>
                            <option value="mknringan">Makanan Ringan</option>
                            <option value="mknberat">Makanan Berat</option>
                            <option value="minum">Minuman</option>
                        </select>                    </div>
                    <div class="judul col-5">
                        <label for="">
                            No Handphone
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="" id="" placeholder="Masukkan No HP">
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Alamat
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="" id="" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="col-12" style="display: flex; margin-top: 30px;justify-content: flex-end;">
                        <div class="" style="display: flex">
                            <div class="buttonbatal">
                                <a href="/supplier">
                                    <input type="button" value="Batal" style="margin-right: 11px;">
                                </a>
                            </div>
                            <div class="buttonsimpan">
                                <input type="button" value="Simpan" style="margin-right: 11px;">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @else
    @include("nonlogin");
    @endif
</body>
</html>
