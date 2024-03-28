<!-- Create a login form  -->

<!DOCTYPE html>
<?php include_once 'sessionConfig.php'; ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/login.css">
  </head>
  <body>
    <form action="userAuth.php" method="post">
        <div class="imgcontainer">
          <img src="images/logo.png" alt="logo" class="logo">
        </div>
      
        <div class="container">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit">Login</button>

        </div>
           <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
      
        <div class="container" style="background-color:#f1f1f1">
          <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
        <a href="index.php" class="backbutton"></a>
      </body>
      </form>
  </body>
</html>



