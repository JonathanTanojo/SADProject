<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- JS --}}
    <script src="login.js"></script>
    {{-- CSS --}}
    <link rel ="stylesheet" href = "stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Ubah Password</title>
</head>
<body style="background-color: #f3f1ff;">
    <header>
        <h1>Login<h1>
    </header>
<br>
<div class="head">
    <p><b>Lupa Password</b></p>
</div><br>
<div class="subhead">
    <p>Selamat Datang</p>
</div>
<div class="image">
    <img src="images/Selamat Hari Raya Idul Fitri (2).png">
</div>
<div class="toko">
    <p>Tirta Anugerah</p>
</div>
<div class="background">
    <form method="" action="">
        <div class="login">
            <div class="input-icons">
                <label class="title" for="user">Username :</label><br>
                <i class="fa fa-user icon"></i>
                <input type="text" id="user" name="user" placeholder="Masukkan Username" class="text" style="margin-top: 5px" required>
                <div class="signup">
                    <a href="/" style="text-decoration: none;color:grey;display:flex;justify-content:flex-end">Ingat Kata Sandi</a>
                </div>
            </div>
            <br>
                <!-- <button class="button" id="myBtn" value="ubah" type="">Ubah Kata Sandi</button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <button class="button" value="ubah" type="">Ubah Kata Sandi</button>
                        <p>Some text in the Modal..</p>
                    </div>
                </div> -->
                <button type="button" class="btnubah" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah Kata Sandi</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       Yakin mengubah kata sandi?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href = "/"><button type="submit" class="btn btn-outline-success">Save changes</button></a>
                    </div>
                    </div>
                </div>
                </div>
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
