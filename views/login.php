<?php
  require_once('../models/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Log in</title>
</head>
<body>
<h1>Somename</h1>
<div class="flex">
<div class="logincontainer">
<h1>Login </h1>
<i class="fas fa-unlock-alt"></i>
<form action="login.php" method="post" class="loginform">
<input type="text" name="username" value="" placeholder="Username"><br>
<input type="password" name="password" value="" placeholder="Password"><br>
<input type="submit" class="button" name="login" value="Login">
</form>
</div>
</div>
</body>
</html>
