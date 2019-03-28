<?php
require_once('../models/logout.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/logout.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Logout</title>
</head>
  <body>
    <h1>Somename</h1>
    <div class="flex">
      <div class="containerlogout">
      <h1>Logout</h1>
      <i class="fas fa-lock"></i>
      <p>Are you sure you'd like to log out?</p>
      <form action="logout.php" method="post">
        <input class="checkbox" type="checkbox" name="alldevices" value="alldevices"> Log out all devices <br>
        <input class="button" type="submit" name="confirm" value="Confirm">
      </form>
    </div>
    </div>
  </body>
</html>