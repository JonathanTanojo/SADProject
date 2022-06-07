<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSS --}}
    <link rel ="stylesheet" href = "stylelogin.css">
    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/4e31525354.js" crossorigin="anonymous"></script>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Masuk</title>
</head>
<body style="background-color: #f3f1ff;">
    <header>
        <h1>Login<h1>
    </header>
    <br>
    <div class="head">
        <p><b>Login Account</b></p>
    </div><br>
    <div class="subhead">
        <p>Selamat Datang</p>
    </div>
    <div class="image">
        <img src="images/Selamat Hari Raya Idul Fitri (1).png">
    </div>
    <div class="toko">
        <p>Tirta Anugerah</p>
    </div>


    <div class="background">
        <!-- <div class="modal" tabindex="-1"> -->

        <!-- </div> -->
        <form method="POST" action="{{url('/produk')}}">
            @csrf
            <div class="login">
                <div class="input-icons">
                    <div class="inputboxusername" style="display: flex">
                        <input type="text" id="user" name="user" placeholder="Masukkan Username" class="text" required>
                    </div>
                    <div class="show" style="margin-top: 15px">
                        <input type="password" id="password" name ="password" placeholder="Masukkan Password" class="password" required>
                        <div class="sakline" style="display: flex;justify-content: space-between; margin-top:5px">
                            <div class="showpass">
                                <input type="checkbox" onclick="myFunction()" style="margin-right: 5px">Show Password
                            </div>
                            <div class="signup">
                                <a href="/ubahpass" style="text-decoration: none;color:grey">Lupa Kata Sandi?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/produk"><button class="button" value="login" type="submit">Login</button></a>
                @if(session()->has('error'))
                <script>
                    alert("Username atau Password salah");
                    </script>
                @endif
            </div>
        </form>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
    </script>
</body>
</html>
