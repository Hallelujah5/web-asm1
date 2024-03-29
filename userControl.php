<?php

if(isset($_POST["action"]) && isset($_POST["id"])){
    $action = $_POST["action"];
    if($action === "DELETE"){
        $id = $_POST["id"];
        $success = deleteEoi($id);
        header("Location: manager.php");
        exit();
    } elseif($action === "UPDATE"){
        if(isset($_POST["first_name"]) && isset($_POST["last_name"])
        && isset($_POST["email"]) && isset($_POST["job_reference_number"])
        && isset($_POST["date_of_birth"]) && isset($_POST["gender"])
        && isset($_POST["street_address"]) && isset($_POST["suburb_town"])
        && isset($_POST["state"]) && isset($_POST["postcode"])
        && isset($_POST["phone_number"]) && isset($_POST["status"])
        && isset($_POST["id"])){

            $id = $_POST["id"];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $job_reference_number = $_POST["job_reference_number"];
            $date_of_birth = $_POST["date_of_birth"];
            $gender = $_POST["gender"];
            $street_address = $_POST["street_address"];
            $suburb_town = $_POST["suburb_town"];
            $state = $_POST["state"];
            $postcode = $_POST["postcode"];
            $phone_number = $_POST["phone_number"];
            $status = $_POST["status"];
            $other_skills = $_POST["other_skills"];

            updateEois($id, $first_name, $last_name, $email, $job_reference_number
            , $date_of_birth, $gender, $street_address, $suburb_town,
            $postcode, $phone_number, $status, $other_skills);

            header("Location: manager.php");
            exit();
    }
}
}

// function searchSkillsById($id) {
    

//     $query = "SELECT s.skill_name FROM skills s JOIN eoi_skills es ON s.id = es.skill_id WHERE es.eoi_id = ?";
//     $stmt = mysqli_prepare($conn, $query);
//     if (!$stmt) {
//         die("Error preparing statement: " . mysqli_error($conn));
//     }
    
//     mysqli_stmt_bind_param($stmt, "i", $id);

//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
    
//     if (!$result) {
//         die("Error retrieving skills: " . mysqli_error($conn));
//     }

//     mysqli_stmt_close($stmt);
//     mysqli_close($conn);
//     return $result;
// }

function deleteEoi($id){
    include_once("dbConnect.php");

    $stmt = mysqli_prepare($conn, "DELETE FROM eoi WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $success;
}



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

function searchByIdNameEmail($searchString) {
    include_once("dbConnect.php");

    $searchString = strip_tags(trim($searchString));

    $searchString = "%" . $searchString . "%";
    $query = "SELECT * FROM eoi WHERE email LIKE ? OR first_name LIKE ? OR last_name LIKE ? OR id LIKE ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $searchString, $searchString, $searchString, $searchString);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $result;
}

function updateEois($id, $first_name, $last_name, $email, $job_reference_number
, $date_of_birth, $gender, $street_address, $suburb_town, $postcode, $phone_number, $status, $other_skills) {
    include_once("dbConnect.php");

    $query = "UPDATE eoi SET first_name = ?, last_name = ?, email = ?, job_reference_number = ?, date_of_birth = ?, gender = ?, street_address = ?, suburb_town = ?, status = ?, postcode = ?, phone_number = ?, other_skills = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssssissssssi", $first_name, $last_name, $email, $job_reference_number, $date_of_birth, $gender, $street_address, $suburb_town, $status, $postcode, $phone_number, $other_skills, $id);

    mysqli_stmt_execute($stmt);
    $success = mysqli_stmt_affected_rows($stmt);

    if ($success === -1) {
        die("Error updating record: " . mysqli_error($conn));
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $success;
}


?>