<?php

    include_once("dbSettings.php");

    // Create connection to the database
    $conn = mysqli_connect("$host","$username","$password","$dbname");

    //Check for connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected to MySQL database successfully! <br>";

    // Close connection
    mysqli_close($conn);

    
?>

