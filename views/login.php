
<?php

require_once('./models/login.php')
?>

<h1>Login to your account</h1>
<form action="login.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />
<input type="submit" name="login" value="Login">
</form>