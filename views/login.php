<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log in</title>
</head>
<body>

<?php
  require_once('./models/login.php');
?>

<h1>Login to your account</h1>
<form action="login.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><br>
<input type="password" name="password" value="" placeholder="Password ..."><br>
<input type="submit" name="login" value="Login">
</form>

</body>
</html>