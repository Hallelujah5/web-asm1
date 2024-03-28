<?php

function selectAllEois() {
    include_once("dbConnect.php");

    $query = "SELECT * FROM eoi ORDER BY first_name";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    return $result;
}

function searchByEoiId($eoiId) {
    include_once("dbConnect.php");

    $query = "SELECT * FROM eoi WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $eoiId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    return $result;
}


?>