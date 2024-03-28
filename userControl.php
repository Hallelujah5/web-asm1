<?php

function selectAllUsers() {
    include_once("dbConnection");

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    return $result;
}

?>