<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- CSS --}}
     <link rel="stylesheet" href="jcss.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     {{-- Font --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Detail Produk</title>
</head>
<body>
    @include("nproduk")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;height: 1070px;background-color: #F3F1FF;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;">
                <div class="detail col-6">
                    <label>Detail Produk</label>
                </div>
                <div class="restok col-6 ">
                    <label>Restok Produk</label>
                </div>
            </div>

            <div class="col-12 contentbawah">
                <form action="">
                    @csrf
                    <div class="judul col-4">
                        <label for="">
                            Nama Produk
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" value="Filma" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Kategori Produk
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <select name="" id="">
                            <option value="">Minyak Goreng</option>
                            <option value="">Makanan Ringan</option>
                            <option value="">Makanan Berat</option>
                            <option value="">Minuman</option>
                        </select>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Nama Supplier
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="text" name="" id="" value="Toko Jaya Abadi" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Harga Beli
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="" id="" value="120.000" readonly>
                    </div>
                    <div class="judul col-4">
                        <label for="">
                            Harga Jual
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="number" name="" id="" value="120.000" readonly>
                    </div>
                    <div class="judul col-5">
                        <label for="">
                            Tanggal Perubahan
                        </label>
                    </div>
                    <div class="inputbox col-8">
                        <input type="date" name="" id="" value="2022-02-10" readonly>
                    </div>
                    <div class="col-12" style="display: flex; margin-top: 40px;">
                        <div class="buttonhapus col-3" >
                            <input type="button" value="Hapus" style="margin-right: 11px;">
                        </div>
                        <div class="col-12" style="display: flex">
                            <div class="buttonbatal col-3" >
                                <input type="button" value="Batal" style="margin-right: 11px;">
                            </div>
                            <div class="buttonsimpan col-3" >
                                <input type="button" value="Simpan" style="margin-right: 11px;">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
