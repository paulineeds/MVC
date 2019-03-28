<?php
 require_once('../models/change-password.php');
?>
<h1>Change your Password</h1>
<form action="change-password.php" method="post">
        <input type="password" name="oldpassword" value="" placeholder="Current Password ..."><p />
        <input type="password" name="newpassword" value="" placeholder="New Password ..."><p />
        <input type="password" name="newpasswordrepeat" value="" placeholder="Repeat Password ..."><p />
        <input type="submit" name="changepassword" value="Change Password">
</form>