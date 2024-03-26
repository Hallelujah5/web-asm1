<!-- Create a login form  -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <form action="userAuth.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required> <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required> <br>
        <input type="submit" value="Login">
    </form>
    </body>
</html>



