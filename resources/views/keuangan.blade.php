<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}

    <link rel="stylesheet" href="keuangancss.css">

    <link rel="stylesheet" href="jcss.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Stok Produk</title>
</head>
<body>
<form method="POST" action="{{url('/keuangan')}}">
  @csrf
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 100vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="top col-12">
                <div class="col-4"style="margin-left: 5px;">
                    <div class="combbox">
                        <select name="kategoribarang" id="kategoribarang" onchange="kategori()">
                            <option value="" selected disabled hidden>Filter</option>
                            <option value="sembako">Sembako</option>
                            <option value="bahanpokok">Bahan Pokok</option>
                            <option value="makanan">Makanan</option>
                            <option value="minum">Minuman</option>
                            <option value="rokok">Rokok</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="searchbox">
                        <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.624,15a8.03,8.03,0,0,0,10.619.659l5.318,5.318a1,1,0,0,0,1.414-1.414l-5.318-5.318A8.04,8.04,0,0,0,3.624,3.624,8.042,8.042,0,0,0,3.624,15Zm1.414-9.96a6.043,6.043,0,1,1-1.77,4.274A6,6,0,0,1,5.038,5.038Z"/></svg></i>
                        <input type="text" placeholder="Search..">
                    </div>
                </div>
            </div>
            <div class="kontentable col-12">
                <table class="table align-middle">
                    <thead class="align-middle header">
                      <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Terjual</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Uang Masuk</th>
                        <th scope="col">Laba</th>
                      </tr>
                    </thead>
                    <tbody style="font-size: 11px;text-align:center">
                    <?php
                    $color = NULL;
                    $color1 = "white";
                    $color2 = "#F3F1FF";
                    for ($x=0;$x<sizeof($tabel);$x++){
                      $color == $color1 ? $color=$color2 : $color=$color1;
                      echo"
                      <tr style='background-color:$color'>
                        <td>{$tabel[$x]->NAMA_BARANG}</td>
                        <td>{$tabel[$x]->TERJUAL}</td>
                        <td>{$tabel[$x]->HARGA_SATUAN}</td>
                        <td>{$tabel[$x]->UANG_MASUK}</td>
                        <td>{$tabel[$x]->Laba}</td>
                      </tr>";
                    }
                    ?>
                   
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</form>
</html>