<?php
  require_once('../models/register.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
</head>
<body>

<h1> Somename </h1>
<div class="flex">
    <form method="POST" action="register.php">
      <div class="containerreg">
        <h1>Register</h1>
        <h6>Please fill in this form to create an account.</h6>

        <input type="text" name="username" value="" placeholder="Username ..."><br>
      <input type="password" name="password" value="" placeholder="Password ..."><br>
      <input type="email" name="email" value="" placeholder="someone@somesite.com"><br>
      <input type="submit" name="createaccount" value="Create Account">
    </form>

    <div class="containerlogin">
      <p>Already have an account? <a href="login.php">Log in</a>.</p>
    </div>
    </div>
    <div class="pic">
      <img src="../css/pexels-photo-799443.jpeg" alt="">
    </div>
  </div>
  </body>
</html>