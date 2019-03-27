<?php
  require_once('../models/register.php');
?>

<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">

    
  </head>
  <body>
=======
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


>>>>>>> 7f7e0a6d48b664cee801ed9dc0bc29ba980fb559

    <?php
    require_once('./models/register.php');
    ?>

    <form method="POST" action="register.php">
      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>

        <input type="text" name="username" value="" placeholder="Username ..."><br>
      <input type="password" name="password" value="" placeholder="Password ..."><br>
      <input type="email" name="email" value="" placeholder="someone@somesite.com"><br>
      <input type="submit" name="createaccount" value="Create Account">
    </form>

    <div class="container login">
      <p>Already have an account? <a href="login.php">Log in</a>.</p>
    </div>
  </body>
</html>