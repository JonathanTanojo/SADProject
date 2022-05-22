<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
<style>
* {
  box-sizing: border-box;
}
tr:nth-child(even) {
  background-color: #E0E4FF;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 5px 5px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 8px;
  padding: 1px 1px 1px 1px;
  border: 1px solid #ddd;
  margin-bottom: 1px;
}


#myTable {
  border-collapse: collapse;
  width: 1%;
  border: 1px solid #ddd;
  font-size: 7px;

}


#myTable th, #myTable td {
  text-align: left;
  padding: 5px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
form {
  float : left;
}


</style>
</head>
<body>

  <form class="example" action="/action_page.php" style="margin:auto;max-width:100px">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Produk..." title="Type in a name">
  </form>
<button style="font-size:10px;margin-left:40px">Filter<i class="fa fa-filter"></i></button>

<table id="myTable">
  <tr class="header">
    <th style="width:20%;">Name</th>
    <th style="width:20%;">Kategori</th>
    <th style="width:20%;">No.HP</th>
    <th style="width:20%;">Alamat</th>
    <th style="width:20%;">Aksi</th>
  </tr>

  <tr>
    <td>Toko Abadi</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Base</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Naga</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Kar</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Ling</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Edi</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Budi</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
  <tr>
    <td>Toko Cash</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Cuaan</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Sir</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Scri</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Vi</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Dur</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>

  </tr><tr>
    <td>Toko SOS</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko OK</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Gen</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko YA</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Fa</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko LO</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Panda</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko T</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Ra</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko MM</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko KK</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Kawan</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Sus</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr><tr>
    <td>Toko Hdi</td>
    <td>Sembako</td>
    <td>081229079888</td>
    <td>Jl.Mulyono No 9</td>
    <td><i class="fa fa-edit" style="font-size:10px;color:black"></i><i class="fa fa-trash-o" style="font-size:10px;color:red"></i>
      <br> </td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>
