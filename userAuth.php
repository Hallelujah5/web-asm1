<?php

session_start();




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
    // $hashedPassword = password_hash($loginPassword, PASSWORD_DEFAULT);

    //Create a prepare statment to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $loginPassword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


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