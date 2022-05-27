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
                <div class="baru col-6">
                    <label>Transaksi Baru</label>
                </div>
                <div class="detail col-6 ">
                    <label>Riwayat Transaksi</label>
                </div>
            </div>
            <div class="searchbox">
                <input class="searchBox" type="text" placeholder="Search...">
                {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}
            </div>
            <div class="kontentable col-12">
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
                        <?php
                    $color = NULL;
                    $color1 = "white";
                    $color2 = "#F3F1FF";
                    for ($x=0;$x<sizeof($tabel);$x++){
                      $color == $color1 ? $color=$color2 : $color=$color1;
                      echo"
                      <tr style='background-color:$color; text-align: center;'>
                        <td>{$tabel[$x]->Barang}</td>
                        <td>{$tabel[$x]->Kategori}</td>
                        <td>{$tabel[$x]->Harga_Beli}</td>
                        <td>{$tabel[$x]->Harga_Jual}</td>
                        <td> <a href='edit/{$tabel[$x]-> ID}'><img src='img/edit-icon.png'></a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>
