<?php
require_once './classes/Database.php';
if(isset($_POST['registerbtn'])) {
  $username = $_POST['username'];
  $password = $_POST['psw'];
  $passwordRepeat = $_POST['psw-repeat'];

  Database::query('INSERT INTO user VALUES(\'\',user_name, password,\'\')', array($username, $password));
  echo 'succes' . $username . $password;
};

?>