<?php

session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}



?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center text-success mt-5">Welcome
    <?php echo $_SESSION["username"] ?>
    </h1>


    <div class="container mt-5 text-center">
        <a href="logout.php" class="btn btn-primary mt-5" >Logout</a>
    </div>



  </body>
</html>