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
  <title>Tambah Jenis Sepatu</title>
</head>
<style>
body {
  background-image: url(fotobb.webp);
}
	.top-bar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 40px;
  background-color: brown;
  border-bottom: 3px solid white;
  z-index: 9999;
}
	.container {
  width: 660px;
  height: 440px;
  margin: 100px auto;
  background-color: burlywood;
	background-size: 100px;
  position: relative;
	border-radius: 10px 10px 10px 10px;
}
.container1 {
	border-radius: 10px 10px 10px 10px;
}

body h1 {
	text-align: center;
}

</style>
<body>
<div class="top-bar"></div>
<div class="container">

<div class="container1" style="background-color: brown;"><h1>Tambah Jenis Sepatu</h1></div>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <br><li>
        <label for="size">Size : <br></label>
        <input type="text" name="size" id="size" size="70">
      </li>
      <br><li>
        <label for="model">Model  : <br></label>
        <input type="text" name="model" id="model" size="70">
      </li>
      <br><li>
        <label for="merk">Merk : <br></label>
        <input type="text" name="merk" id="merk" size="70">
      </li>
      <br><li>
        <label for="harga">Harga : <br></label>
        <input type="text" name="harga" id="harga" size="70">
      </li>
      <br><li>
        <label for="gambar">Gambar : <br></label>
        <input type="file" name="gambar" id="gambar" size="70">
      </li>
        <button type="submit" name="submit">Tambah</button>
      <br></li>
    </ul>

  </form>
</div>
</body>
</html>