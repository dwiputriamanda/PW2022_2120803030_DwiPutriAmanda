<?php 
$mahasiswa = [
  ["Dwi Putri Amanda", "2120803030", "Sistem Onformasi", "dwiputriamanda18@gamail.com"],
  ["Budi", "26472835", "Teknik Onformasi", "Budi18@gamail.com"],
  ["Angga", "267453", "Ilmu Komputer", "Angga@gamail.com"],
  ["Rio", "7563526", "Teknik jaringan", "Rio@gamail.com"],
  ];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  
 </body>
  <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
    <li><?= $mhs[0]; ?></li>
    <li><?= $mhs[1]; ?></li>
    <li><?= $mhs[2]; ?></li>
    <li><?= $mhs[3]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>