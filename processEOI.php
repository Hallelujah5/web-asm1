<?php

include_once("eoiControl.php");

//sanitize input data func
function sanitize_input($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

// Check if user submits the form
// also prevents them from directly accessing by the URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $firstName = isset($_POST["Name"]) ? sanitize_input($_POST["Name"]) : "";
        $lastName = isset($_POST["Family"]) ? sanitize_input($_POST["Family"]) : "";
        $dob = isset($_POST["birthdate"]) ? sanitize_input($_POST["birthdate"]) : "";
        $jobPref = isset($_POST["JobPref"]) ? sanitize_input($_POST["JobPref"]) : "";
        $gender = isset($_POST["gender"]) ? sanitize_input($_POST["gender"]) : "";
        $strAddress = isset($_POST["Street"]) ? sanitize_input($_POST["Street"]) : "";
        $suburb = isset($_POST["Suburb"]) ? sanitize_input($_POST["Suburb"]) : "";
        $state = isset($_POST["State"]) ? sanitize_input($_POST["State"]) : "";
        $postcode = isset($_POST["postcode"]) ? sanitize_input($_POST["postcode"]) : "";
        $email = isset($_POST["email"]) ? sanitize_input($_POST["email"]) : "";
        $phone = isset($_POST["phone"]) ? sanitize_input($_POST["phone"]) : "";
        $otherSkills = isset($_POST["other"]) ? sanitize_input($_POST["other"]) : "";
        $skills = isset($_POST["skill"]) ? $_POST["skill"] : null;
        $cv =  isset($_FILES["cv"]) ? $_FILES["cv"] : null ;

        $errMsg = "";
        if ($firstName == "") {
            $errMsg .= "<p>Please enter your first name</p>";
        } else if (!preg_match("/^[a-zA-Z]*$/", $firstName)) {
            $errMsg .= "<p>Only alpha letters and white space allowed in first name. </p>";
        }

        if ($lastName == "") {
            $errMsg .= "<p>Please enter your last name</p>";
        } else if (!preg_match("/^[a-zA-Z\-]*$/", $lastName)) {
            $errMsg .= "<p>Only alpha letters, hyphen, and white space allowed in last name. </p>";
        }

        if ($email == "") {
            $errMsg .= "<p>Please enter your email</p>";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errMsg .= "<p>Invalid email format</p>";
        }

        if ($dob == "" ) {
            $errMsg .= "<p>Please enter a valid date of birth</p>";
        }

        if ($jobPref == "") {
            $errMsg .= "<p>Please select your job preference</p>";
        }

        if ($phone == "") {
            $errMsg .= "<p>Please enter your phone number</p>";
        } else if (!preg_match("/^[0-9]{8,12}$/", $phone)) {
            $errMsg .= "<p>Phone number should have 8-12 numeric value</p>";
        }

        if ($suburb == "") {
            $errMsg .= "<p>Please enter your suburb</p>";
        } else if (!preg_match("/[A-Za-z]+/", $suburb)) {
            $errMsg .= "<p>Suburb only allow alpha letters</p>";
        }

        if ($errMsg != "") {
            echo $errMsg;
            exit;
        } else {
          insertEoi($jobPref, $firstName, $lastName, $dob, $gender, $strAddress, $suburb, $state, $postcode, $email, $phone, $otherSkills, $skills, $cv);
        }
    }

