<?php 
$mahasiswa = ["Dwi Putri Amanda", "2120803030", "Sistem Onformasi", "dwiputriamanda18@gamail.com"];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
  
 </body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach($mahasiswa as $mhs){ ?>
    <li><?php echo $mhs ?></li>
    <?php } ?>
  </ul>
  //perubahan =
  <ul>
    <?php foreach ($mahasiswa as $msh) : ?>
      <li><?= $msh; ?></li>
    <?php endforeach ?>
  </ul> 

 </html>