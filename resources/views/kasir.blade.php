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
    <script src="js/kasir.js"></script>
    <title>Kasir</title>
</head>
<body>
    <div class="col-12">
        <!-- Bottom Navbar -->
        <nav class="navbar col-12 fixed-bottom">
            <ul class="navbar-nav nav-justified w-100">
                <li >
                    <a href="cashier" class="nav-link">
                        <img src="{{ asset('img/cashier.png'); }}" alt="">
                    </a>
                </li>
                <li class="active">
                    <a href="/" class="nav-link">
                        <img src="{{ asset('img/box.png'); }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="laporan" class="nav-link">
                        <img src="{{ asset('img/cash-report.png'); }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="supplier" class="nav-link">
                        <img src="{{ asset('img/truck.png'); }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="user" class="nav-link">
                        <img src="{{ asset('img/user.png'); }}" alt="">
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            <a href="/kasir"><button class="btn active">Transaksi Baru</button></a>
          </div>
          <div class="col">
            <a href="/kasir"><button class="btn">Riwayat Transaksi</button></a>
          </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
</body>
</html>
