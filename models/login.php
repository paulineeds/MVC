<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    //set the username and password variables from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //create sql string to retrieve the string from the database table "users"
    $sql = "SELECT * FROM `users` WHERE username = '". addslashes($username) ."' AND password = '". md5('$password')."'";
    $result = mysql_query($sql);
        if (mysql_num_rows($result)>0) {
            $return = "<font color=#008000><Center><b>**Successful Login**</b></Center></font>";
        } else {
            $return = "<font color=#ff0000><Center><b>**Failed Login**</b></Center></font>";
        }
        print($return);
}
?>