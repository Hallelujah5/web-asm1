<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/logout.css">
    <img src="images/logo.png" alt="logo" class="logo">
    <title>Logout</title>
</head>
<body>
    <a href="index.php" class="backbutton"></a>
    <h1>You have been logged out <span class="tick">&#10004;</span> </h1>
    <p><a href="login.php" class="button">Login Again</a></p>
</body>
</html>
