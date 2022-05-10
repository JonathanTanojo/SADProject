<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
crossorigin="anonymous" 
referrerpolicy="no-referrer" />
<link rel ="stylesheet" href = "stylelogin.css">
    <title>Document</title>
</head>
<body>
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
    <form method="post" action="">
        <div class="login">
            <div class="input-icons">
                <label class="title" for="user">Username :</label><br>
                <i class="fa fa-user icon"></i>
                <input type="text" id="user" name="user" placeholder="Masukkan Username" class="text" required>
            </div>  
            <br>
                <button class="button" value="login "type="submit">Ubah Kata Sandi</button>
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