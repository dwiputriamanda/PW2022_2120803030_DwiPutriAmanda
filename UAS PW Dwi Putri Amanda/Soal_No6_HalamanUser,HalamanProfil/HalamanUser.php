<?php
require 'Function.php';
$tokosepatu = query("SELECT * FROM tokosepatu");

if (isset($_POST["cari"])) {
  $tokosepatu = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman User</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="top-bar"></div>
  <div class="container">
    <div class="header">

      <div class="container1" style="background-color: brown;">
      <h2>Halaman User<br>Toko Sepatu Berbagai Macam Sepatu</h2>
    </div><div class="profil">
    <a href="HalamanProfil.php"> Profil </a>
    </div>
    
    <div class="cari">
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" 
        autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
      </form>
    </div>

    <table>
      <tr>
        <th>Gambar</th>
        <th>Size</th>
        <th>Model</th>
        <th>Merk</th>
        <th>Harga</th>
      </tr>

      <?php foreach ($tokosepatu as $tokosepatu) : ?>
        <tr>
          <td>
          <img src="img/<?= $tokosepatu["gambar"]; ?>" width="60" height="80"> 
          </td>
          <td><?= $tokosepatu["size"]; ?></td>
          <td><?= $tokosepatu["model"]; ?></td>
          <td><?= $tokosepatu["merk"]; ?></td>
          <td><?= $tokosepatu["harga"]; ?></td>
        </tr>
      <?php endforeach; ?>

    </table>

  </div>
</body>

</html>