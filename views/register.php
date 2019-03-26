<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>

<?php
require_once './classes/Database.php';
if(isset($_POST['registerbtn'])) {
  $username = $_POST['username'];
  $password = $_POST['psw'];
  $passwordRepeat = $_POST['psw-repeat'];

  Database::query('INSERT INTO user VALUES(\'\',user_name, password,\'\')', array('username'=>$username, 'password'=>$password));
  echo 'succes' . $username . $password;
};

?>
  <form method="POST" action="register.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat">

    <button type="submit" class="registerbtn" name="registerbtn">Register</button>
  </div>

  <div class="container login">
    <p>Already have an account? <a href="login.php">Log in</a>.</p>
  </div>
</form>
</body>
</html>