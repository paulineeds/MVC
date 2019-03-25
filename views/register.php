<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <form>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container login">
    <p>Already have an account? <a href="login.php">Log in</a>.</p>
  </div>
</form>
</body>
</html>