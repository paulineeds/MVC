<?php
require_once('classes/DB.php');
if (isset($_POST['createaccount'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        DB::query('INSERT INTO users VALUES (:id , :username, :password, :email)', array('id'=>null,':username'=>$username, ':password'=>$password, ':email'=>$email));
        echo "Success!";
}
?>