<?php 

$mahasiswa = 
[
  [
  "nama" => "Dwi Putri Amanda",
  "nim" => "2120803030",
  "jurusan" => "sistem informasi",
  "email" => "dwiputriamanda18@gmail.com",
  "gambar" => "gambar1.webp"
  ],
  [
  "nama" => "Ahmad",
  "nim" => "26383625",
  "jurusan" => "sistem informasi",
  "email" => "joni@gmail.com",
  "gambar" => "gambar2.webp"
  ]
  ,
  [
  "nama" => "Ibrahim",
  "nim" => "22963625",
  "jurusan" => "sistem informasi",
  "email" => "ibrahim@gmail.com",
  "gambar" => "gambar3.webp"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src="img/<?= $mhs["gambar"];?>" alt="" style="width: 120px"></li>
      <li>Nama : <?= $mhs["nama"]?></li>
      <li>Nim : <?= $mhs["nim"]?></li>
      <li>Jurusan : <?= $mhs["jurusan"]?></li>
      <li>Email : <?= $mhs["email"]?></li>
    </ul>
  <?php  endforeach ?>
</body>
</html>