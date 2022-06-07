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
    <title>{{ $title }}</title>
</head>
<body>
@include("ncashier")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;">
                <div class="baru col-6" style="background-color: #E0E4FF">
                    <a href="/baru"><label class="label">Transaksi Baru</label></a>
                </div>
                <div class="detail col-6" style="background-color: #413B93; border-radius: 10px">
                    <a href="/riwayat"><label class="label">Riwayat Transaksi</label></a>
                </div>
            </div>
            <div class="row" id="searchbox">
                <div class="col-md-6">
                    <form action="/result">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                          </div>
                    </form>
                </div>
            </div>
            <div class="kontentable col-12" id="table">
                <table class="table align-middle">
                    <thead class="align-middle header">
                      <tr>
                        <th scope="col">ID Transasi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Lihat</th>
                      </tr>
                    </thead>
                    <tbody style="font-size: 11px">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
