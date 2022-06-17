<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/31f04b09a4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/kasir.css" />
    <link rel="stylesheet" href="jcss.css" />
    <script src="js/kasir.js"></script>
    <script src="./src/bootstrap-input-spinner.js"></script>
    <title>Receipt</title>
</head>
<body>
@include("ncashier")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;">
                <div class="baru col-6" style="background-color: #413B93">
                    <a href="/baru"><label class="labelbaru">Transaksi Baru</label></a>
                </div>
                <div class="detail col-6" style="background-color: #E0E4FF; border-radius: 10px">
                    <a href="/riwayat"><label class="label">Riwayat Transaksi</label></a>
                </div>
            </div>
            <div>
                <h4 style="margin-top: 10px">Masukkan Transaksi Baru</h4>
            </div>
            <div class="kontentable col-12" id="table">
                <table class="table align-middle">
                    <thead class="align-middle header">
                      <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody style="font-size: 11px">
                    @foreach ($tabel as $cart)
                    <form action="/receipt">
                        <tr>
                            <td><input type="hidden" name="namaBarang">{{$cart->Barang}}</td>
                            <td><input type="hidden" name="hargaBarang">{{$cart->Harga}}</td>
                            <td><input type="hidden" name="qtyBarang">{{$cart->Qty}}</td>
                            <td><input type="hidden" name="subtotalBarang">{{$cart->Subtotal}}</td>
                        </tr>
                    </form>
                    @endforeach
                    </tbody>
                </table>
                <a href="/faktur"><button class="btn-insert">Masukkan Transaksi</button></a>
            </div>
        </div>
    </div>
</body>
</html>
