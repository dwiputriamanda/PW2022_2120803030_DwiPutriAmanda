<?php 
$ASEAN =[
  "Indonesia" => "Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Sri Begawaan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Napydaw",

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
</head>
<body>
  <h1> Daftar ASEAN dan Ibukota </h1>
  <?php 
  foreach ($ASEAN as $a => $b) : ?>
  <li><?= "$a : $b " ?></li>
  <?php endforeach ?>
</body>
</html>