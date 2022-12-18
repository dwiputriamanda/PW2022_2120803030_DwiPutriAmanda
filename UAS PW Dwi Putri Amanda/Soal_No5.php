<?php  
$alas = 6;
$tinggi = 12;

function luas_segitiga_sikusiku ($alas, $tinggi) {

  $luas = 1/2 * $alas * $tinggi;
  return $luas;

}

echo "Jadi, Luas Segitiga Siku-Siku jika</br>
alas 6 cm dan tinggi 12 cm adalah : ". luas_segitiga_sikusiku(6,12). " cm";
?>
