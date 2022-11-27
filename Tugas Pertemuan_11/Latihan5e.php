<?php
if(isset($_POST["submit"])){
  if($_POST["Username"] == "Admin" && $_POST["Password"] == "123"){
        header("Location: Latihan5e1.php");
        exit;
      } else{
      $eror = true;
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<style>
  .container{
    position: absolute;
    width: 500px;
    height: 300px;
    top: 100px;
    left: 370px;
    border: 30px solid gainsboro;
    border-radius: 0px 0px 0px 0px;
    text-align: center;
  }

  .header{
    position: absolute;
    width: 500px;
    height: 70px;
    top: 0px;
    left: 0px;
    background-color: gainsboro;
    text-align: center;
    font: poppins;
    font-size: 35px;
    font-weight: bold;
  }

</style>
<body>
<div class="container" >
  <div class="header">Login</div>
  <h1>Login</h1>
  <ul>
  <form action="" method="post">
    <br>
      <br>
      <label for="Username">Username : </label>
      <input type="text" name="Username" id="Username">
    </br>
    <br>
      <label for="Password">Password : </label>
      <input type="Password" name="Password" id="Password">
    </br>
    <?php if (isset($eror)) :?>
    <p style="color: red; font-style:italic; text-align: bottom" >Username/Password salah!</p>
    <?php endif;?>
    <br>
  <div>
      <button style=" color:white; font-weight:bold; background-color: 
      blue;" type="submit" name="submit" >Log in</button>
    </div>
  </form>
  </ul>
</div>
</body>
</html>