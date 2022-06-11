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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Stok Produk</title>
</head>
<body>
    @include("nproduk")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;">
                <a href="/edit/{{$datadetail[0]-> BARANG_NAMA}}" class="detail col-6" style="text-decoration: none">
                    <label>Detail Produk</label>
                </a>
                <a href="/restok/{{$datadetail[0]-> BARANG_ID}}" class="restok col-6" style="text-decoration: none;color:black">
                    <label>Restok Produk</label>
                </a>
            </div>

            @if (Session::get('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                    <h4>Berhasil!</h4> Data berhasil di ubah.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::get('hapus'))
            <a href="/produk" style="text-decoration: none">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px">
                    <h4>Hapus!</h4> Data berhasil di ubah.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </a>
            @endif
            <div class="kontendata col-11" style="margin-top: 35px;margin-left: 36px;">
                <form action="/edit/{{$datadetail[0]-> BARANG_ID}}" method="POST">
                    @csrf
                <div class="judul col-4">
                    <label for="">
                        Nama Produk
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="text" name="namaproduk" id="" value="{{$datadetail[0]-> BARANG_NAMA}}">
                </div>
                <div class="judul col-5">
                    <label for="">
                        Kategori Produk
                    </label>
                </div>
                <div class="inputbox col-8">
                    <select name="kategoriproduk" id="">
                        <option value="{{$datadetail[0] -> BARANG_KATEGORI_ID}}" selected disabled hidden>{{$datadetail[0] -> BARANG_KATEGORI}}</option>
                        @foreach ($kategori as $kate)
                            <option value="{{$kate -> BARANG_KATEGORI_ID}}">{{$kate -> BARANG_KATEGORI}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="judul col-5">
                    <label for="">
                        Nama Supplier
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="text" name="namasupplier" id="" value ="{{$datadetail[0]-> SUPPLIER_NAMA}}" readonly style="background-color: rgb(219, 219, 219)">
                </div>
                <div class="judul col-4">
                    <label for="">
                        Stok Saat Ini
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="number" name="stoklama" id="" value="{{$datadetail[0]-> BARANG_JUMLAH}}">
                </div>
                <div class="judul col-4">
                    <label for="">
                        Harga Beli
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="number" name="hargabeli" id="" value="{{$datadetail[0]-> BARANG_HARGA_BELI}}">
                </div>
                <div class="judul col-4">
                    <label for="">
                        Harga Jual
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="number" name="hargajual" id="" value="{{$datadetail[0]-> BARANG_HARGA_JUAL}}">
                </div>
                <div class="judul col-6">
                    <label for="">
                        Tanggal Perubahan
                    </label>
                </div>
                <div class="inputbox col-8">
                    <input type="date" name="tanggal" id="" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="col-12" style="display: flex; margin-top: 30px;">
                    </form>
                    <form action="/edit/{{$datadetail[0]-> BARANG_ID}}/hps" method="POST">
                        @csrf
                        <div class="buttonhapus">
                            <button style="margin-right: 11px;">Hapus</button>
                        </div>
                    </form>
                    <div class="" style="display: flex">
                        <div class="buttonbatal">
                            <a href="/produk">
                                <input type="button" value="Batal" style="margin-right: 11px;">
                            </a>
                        </div>
                            <div class="buttonsimpan">
                                <button>Simpan</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
