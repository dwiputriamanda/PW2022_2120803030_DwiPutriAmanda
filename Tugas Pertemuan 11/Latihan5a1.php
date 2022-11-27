<?php 
$angka = $_GET['angka'];

for ($i=10; $i>=1; $i--){
  for ($j=1; $j<=$i; $j++){
   echo " $j ";
  }
  echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Angka Terurut</title>
</head>
<body>
  <h1><?php echo $angka; ?> </h1>
</body>
</html>