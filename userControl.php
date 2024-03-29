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

            updateEois($id, $first_name, $last_name, $email, $job_reference_number
            , $date_of_birth, $gender, $street_address, $suburb_town,
            $postcode, $phone_number, $status);

            header("Location: manager.php");
            exit();
    }
}
}

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
    $query = "SELECT * FROM eoi WHERE email = ? OR first_name = ? OR last_name = ? OR id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $searchString, $searchString, $searchString, $searchString);

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
, $date_of_birth, $gender, $street_address, $suburb_town, $postcode, $phone_number, $status) {
    include_once("dbConnect.php");

    print "$gender";

    $query = "UPDATE eoi SET first_name = ?, last_name = ?, email = ?, job_reference_number = ?, date_of_birth = ?, gender = ?, street_address = ?, suburb_town = ?, status = ?, postcode = ?, phone_number = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssssisssssi", $first_name, $last_name, $email, $job_reference_number, $date_of_birth, $gender, $street_address, $suburb_town, $status, $postcode, $phone_number, $id);

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