<?php 
require 'Function.php';

if( isset($_POST["submit"])) {

  if( tambah($_POST) > 0 ) {
    echo "
      <scrip> 
        alert('data berhasil ditambahkan!');
        document.location,href = 'index.php';
      </scrip>  
    "; 
  } else {
    echo "
      <scrip>
        alert('data gagal ditambahkan!');
        document.location,href = 'index.php';
      </scrip>"; 
    
  }
}
?>

<!DOCTYPE html>
<head>
  <title>PROFIL</title>
  <link rel="stylesheet" href="profil.css">
</head>
<body>
<div class="top-bar"></div>
<div class="container">

<div class="container1" style="background-color: brown;"><h1>PROFIL</h1></div>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
    <li>
        <label for="gambar">Foto Detail : <br></label>
        <img src="addidas.jpg" alt="Profil" width="150px" sizes="250">
        
      </li><br>
      <li>
        <label for="size">Nama : <br></label>
        <input type="text" name="nama" id="nama" size="90" >
      </li><br>
      <li>
        <label for="size">Size : <br></label>
        <input type="text" name="size" id="size" size="90"  >
      </li><br>
      <li>
        <label for="model">Model  : <br></label>
        <input type="text" name="model" id="model" size="90" >
      </li><br>
      <li>
        <label for="merk">Merk : <br></label>
        <input type="text" name="merk" id="merk" size="90" >
      </li><br>
      <li>
        <label for="harga">Harga : <br></label>
        <input type="text" name="harga" id="harga" size="90" >
      </li><br>
      <br>
      <div class="User">
        <a href="HalamanUser.php"> Kembali </a>
      </div>
    </ul>
      
  </form>
</div>
</body>
</html>