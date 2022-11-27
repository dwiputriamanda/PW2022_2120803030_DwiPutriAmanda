<?php 

$mahasiswa = 
[
  [
  "nama" => "Dwi Putri Amanda",
  "nim" => "2120803030",
  "jurusan" => "sistem informasi",
  "email" => "dwiputriamanda18@gmail.com"
  ],
  [
  "nama" => "Ahmad",
  "nim" => "26383625",
  "jurusan" => "sistem informasi",
  "email" => "joni@gmail.com"
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
      <li>Nama : <?= $mhs["nama"]?></li>
      <li>Nim : <?= $mhs["nim"]?></li>
      <li>Jurusan : <?= $mhs["jurusan"]?></li>
      <li>Email : <?= $mhs["email"]?></li>
    </ul>
  <?php  endforeach ?>
</body>
</html>