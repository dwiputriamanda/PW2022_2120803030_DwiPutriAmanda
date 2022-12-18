<?php 
require 'Function.php';
$tokosepatu = query("SELECT * FROM tokosepatu");

if( isset($_POST["cari"]) ) {
	$tokosepatu = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="admin.css">
</head>

</style>
<body>
<div class="top-bar"></div>
<div class="container">

<div class="container1" style="background-color: brown;"><h3>Halaman Admin 
	<br> Toko Dengan Berbagai Macam Sepatu</h3></div>

<button style="background-color:white;"><a href="tambah.php" type="text"
 name="keyword" size="40" style="color:black" >Tambah Jenis Sepatu</a></button>
<br><br>

<form action="" method="post">

	<input style="background-color: white; color:black" type="text" name="keyword" 
	size="65" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari" style="background-color: white;">Cari!</button>
	
</form>

<br>
<table border="5" cellpadding="10" cellspacing="0" background-color="white">

	<tr style="color: black;">
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Size</th>
		<th>Model</th>
		<th>Merk</th>
		<th>Harga</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $tokosepatu as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="70"></td>
		<td><?= $row["size"]; ?></td>
		<td><?= $row["model"]; ?></td>
		<td><?= $row["merk"]; ?></td>
		<td><?= $row["harga"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
</div>
</body>
</html>