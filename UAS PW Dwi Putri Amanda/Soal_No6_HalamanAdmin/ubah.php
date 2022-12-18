<?php
require 'Function.php';

$id = $_GET["id"];

$tokosepatu = query("SELECT * FROM tokosepatu WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Toko Sepatu</title>
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
  width: 560px;
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

<div class="container1" style="background-color: brown;"><h1>Ubah Toko Sepatu</h1></div>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $tokosepatu["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $tokosepatu["gambar"]; ?>">
		<ul>
			<li>
				<label for="size">Size : <br></label>
				<input type="text" name="size" id="size" size="70" required value="<?= $tokosepatu["size"]; ?>">
			</li>
			<br><li>
				<label for="model">Model : <br></label>
				<input type="text" name="model" id="model" size="70" value="<?= $tokosepatu["model"]; ?>">
			</li>
			<br><li>
				<label for="merk">Merk : <br></label>
				<input type="text" name="merk" id="merk" size="70" value="<?= $tokosepatu["merk"]; ?>">
			</li>
			<br><li>
				<label for="harga">Harga : <br></label>
				<input type="text" name="harga" id="harga" size="70" value="<?= $tokosepatu["harga"]; ?>">
			</li>
			<br><li>
				<label for="gambar">Gambar : <br></label>
				<img src="img/<?= $tokosepatu['gambar']; ?>" width="80"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br><li>
				<button  type="submit" name="submit" >Ubah Data!</button>
			</li>
		</ul>

	</form>
</div>
</body>
</html>