<?php
include_once("dbConnect.php");

function getAllSkills() {
    global $conn;

    $query = "SELECT * FROM skills";
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die("Error preparing statement: " . mysqli_error($conn));
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Error retrieving skills: " . mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
    return $result;
}




function searchSkillsById($id) {
    global $conn;

    $query = "SELECT s.skill_name FROM skills s JOIN eoi_skills es ON s.id = es.skill_id WHERE es.eoi_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die("Error preparing statement: " . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (!$result) {
        die("Error retrieving skills: " . mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
    return $result;
}






?>
