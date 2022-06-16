<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier</title>
    {{-- CSS --}}
    <link href="{{ URL::asset('jcss.css') }}" rel="stylesheet" type="text/css" >
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    @if(Session('login'))
    @include("nsupplier")
    <div class="container">
        <div class="backgroundcolor" style="border-radius: 10px;background-color: #F3F1FF; height: 97vh;box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.25);margin-top: 15px;">
            <div class="col-12 buttonfilteratas" style="display: flex;background: #E0E4FF; border-radius: 10px;height: 45px;">
                <a href="/supplier" class="daftarsupplier col-6" style="text-decoration: none;">
                    <label>Daftar Supplier</label>
                </a>
            </div>
            <div class="top col-12">
                <div class="col-4"style="margin-left: 5px;">
                    <div class="combbox">
                        {{-- Ganti action --}}
                        <form action="/supplier/filter" method="POST">
                            @csrf
                            <select name="filter" id="filter-kategori">
                                <option value="" selected disabled hidden>Filter</option>
                                @foreach ($kategori as $kate)
                                    <option value="{{$kate -> BARANG_KATEGORI_ID}}">{{$kate -> BARANG_KATEGORI}}</option>
                                @endforeach
                            </select>
                            <div class="butonsearch col-4" style="margin-top:5px;width:100%;">
                                <input class="buttonsearch" value="Search" type="submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-5">
                    <div class="searchbox">
                        <form action="/supplier/search" method="POST">
                            @csrf
                            {{-- <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.624,15a8.03,8.03,0,0,0,10.619.659l5.318,5.318a1,1,0,0,0,1.414-1.414l-5.318-5.318A8.04,8.04,0,0,0,3.624,3.624,8.042,8.042,0,0,0,3.624,15Zm1.414-9.96a6.043,6.043,0,1,1-1.77,4.274A6,6,0,0,1,5.038,5.038Z"/></svg></i> --}}
                            <input type="text" name="search"placeholder="Search..">
                        </form>
                    </div>
                </div>
            </div>
            <div class="kontentable col-12">
                <table class="table align-middle">
                    <thead class="align-middle header">
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
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
                      <tr style='background-color:$color;'>
                        <td>{$tabel[$x]->NamaSupplier}</td>
                        <td style='text-align: center;'>{$tabel[$x]->Kategori}</td>
                        <td style='text-align: center;'>{$tabel[$x]->notlp}</td>
                        <td style='text-align: center;'>{$tabel[$x]->alamat}</td>
                        <td style='text-align: center;'>
                            <div>
                            <a href='/supplier/edit/{$tabel[$x]-> ID}'><img src='../img/edit-icon.png'></a></div>
                            </td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="addbutton"> <a href="/tmbhsupplier"><img src="../img/add.png" alt=""></a></div>
    @else
    @include("nonlogin");
    @endif
</body>
<script type="text/javascript">
    $(".filter").on('change',function(){
      console.log("tes1");
    })
  </script>
</html>
