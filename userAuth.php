<?php

session_start();



//Checks if email and password is exist, and isn't empty, then assign it to $ variables.
if(isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["password"]) && $_POST["password"] != "") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $auth = authenticateUser($email, $password);
    if($auth) {
        print("User authenticated successfully <br>");
        echo "<a href='index.php'>Go to home page</a>";
    } else {
        print("Authentication failed");
    }
}


function authenticateUser($email, $loginPassword) {
    include("dbConnect.php");

    //Create a prepare statment to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");  // '?' here means the user's input, it wants to query the column where email and password is exactly the user's input.
    mysqli_stmt_bind_param($stmt, "ss", $email, $loginPassword);        // 'ss' = two strings.
    mysqli_stmt_execute($stmt);            //we used bind and execute statement functions for extra security.
    $result = mysqli_stmt_get_result($stmt);

    //save server resources.
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    if (mysqli_num_rows($result) == 1) {        //if returns a row, which means it found a user, then assign it to the session email and password.
        $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["role"];
        return true; // User authenticated successfully
    } else {
        return false; // Authentication failed
    }


}

    
?>
