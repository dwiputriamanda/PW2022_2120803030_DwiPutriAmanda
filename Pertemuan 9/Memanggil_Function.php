<?php  
 
 function Volume_dua_kubus($a, $b) {

  $Volume_a = $a * $a * $a;
  $Volume_b = $b * $b * $b;

  $total = $Volume_a + $Volume_b;

  return $total;
 }

 echo " jadi, Volume dua kubus adalah " . Volume_dua_kubus (9,4)
?>