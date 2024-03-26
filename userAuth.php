<?php

session_start();

include("dbConnect.php");

if(isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["password"]) && $_POST["password"] != "") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $auth = authenticateUser($email, $password, $conn);
    if($auth) {
        print("User authenticated successfully");
    } else {
        print("Authentication failed");
    }
}
mysqli_close($conn);


function authenticateUser($email, $password, $conn) {

    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //Create a prepare statment to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);


    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["role"];
        return true; // User authenticated successfully
    } else {
        return false; // Authentication failed
    }


}

    
?>