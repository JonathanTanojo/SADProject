<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link href="{{ URL::asset('../jcss.css') }}" rel="stylesheet" type="text/css" >
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    @if(Session('login'))
    @include("nsupplier")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;padding-top:8px;padding-left:8px">
                <h4><b>Detail Supplier</b></h4>
            </div>
            @if (Session::get('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                <h4>Berhasil!</h4> Data berhasil di ubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('hapus'))
            <a href="/supplier" style="text-decoration: none">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px">
                    <h4>Hapus!</h4> Data berhasil di ubah.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </a>
            @endif
            <div class="kontendata col-11" style="margin-top: 25px;margin-left: 36px;">
                <form action="/tmbhsupplier/proses" method="POST">
                    @csrf
                    <div class="judul col-5">
                        <label for="">
                            Nama Supplier
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="namasupplier" id="" value="" placeholder="Nama Supplier">
                    </div>
                    <div class="judul col-5">
                        <label for="">
                            Kategori Supplier
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <select name="kategorisupplier" id="">
                            <option value="" selected disabled hidden>Kategori Supplier</option>
                            @foreach ($kategori as $kate)
                                <option value="{{$kate -> BARANG_KATEGORI_ID}}">{{$kate -> BARANG_KATEGORI}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="judul col-5">
                        <label for="">
                            No Handphone
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="notlp" id="" value="" placeholder="No Handphone Supplier">
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Alamat
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="alamat" id="" value="" placeholder="Alamat Supplier">
                    </div>
                    <div class="col-12" style="display: flex; margin-top: 30px;justify-content: flex-end;">
                        <div class="" style="display: flex">
                            <div class="buttonbatal">
                                <a href="/supplier">
                                    <input type="button" value="Batal" style="margin-right: 11px;">
                                </a>
                            </div>
                            <div class="buttonsimpan">
                                <button style="margin-right: 20px">Simpan</button>
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
