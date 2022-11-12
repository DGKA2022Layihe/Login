<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <!-- Bootstrap -->
   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>
<body style="background: url(stacked-waves-haikei.svg); font-family: apple, sans-serif; background-size: cover;" class="h-100">
   
<div class="container w-100 h-100 d-flex align-items-center justify-content-center">

<div style="position: absolute; right: 10px; top: 10px;" class="navbar d-flex justify-content-end">
   <ul  style="list-style: none;" class="d-flex">
      <li style="padding-right: 10px;"><a class="btn btn-outline-light" href="login_form.php">Login</a></li>
      <li style="padding-right: 10px;"><a class="btn btn-outline-light" href="register_form.php">Register</a></li>
      <li style="padding-right: 10px;"><a class="btn btn-outline-light" href="logout.php">Logout</a></li>
   </ul>
</div>
   <div class="bg-white bg-opacity-50 p-4 content text-center">
      <h1 class="text-white"> Xoş gəlmisiniz <span class="text-danger"><?php echo $_SESSION['user_name'] ?></span></h1>
      <h5 class="text-white pt-1 pb-2">Şifrələmə üsulunu seçin:</h5>
      <a href="reverse.html" class="btn btn-outline-dark">Reverse</a>
      <a href="base32-encode.html" class="btn btn-outline-dark">Base 32</a>
      <a href="cesar.html" class="btn btn-outline-dark">Cesar</a>
   </div>

</div>

</body>
</html>