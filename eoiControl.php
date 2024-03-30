<?php
include_once("dbConnect.php");


if (isset($_POST["action"]) && isset($_POST["id"])) {
    $action = $_POST["action"];
    if ($action === "DELETE") {
        $id = $_POST["id"];
        $success = deleteEoi($id);
        header("Location: manager.php");
        exit();
    } elseif ($action === "UPDATE") {
        if (isset($_POST["first_name"]) && isset($_POST["last_name"])
            && isset($_POST["email"]) && isset($_POST["job_reference_number"])
            && isset($_POST["date_of_birth"]) && isset($_POST["gender"])
            && isset($_POST["street_address"]) && isset($_POST["suburb_town"])
            && isset($_POST["state"]) && isset($_POST["postcode"])
            && isset($_POST["phone_number"]) && isset($_POST["status"])
            && isset($_POST["id"])
        ) {

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

            $stmt = mysqli_prepare($conn, "UPDATE eoi SET first_name = ?, last_name = ?, email = ?, job_reference_number = ?, date_of_birth = ?, gender = ?, street_address = ?, suburb_town = ?, status = ?, postcode = ?, phone_number = ?, other_skills = ? WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "sssssissssssi", $first_name, $last_name, $email, $job_reference_number, $date_of_birth, $gender, $street_address, $suburb_town, $status, $postcode, $phone_number, $other_skills, $id);

            mysqli_stmt_execute($stmt);
            $success = mysqli_stmt_affected_rows($stmt);

            if ($success === -1) {
                die("Error updating record: " . mysqli_error($conn));
            }

            mysqli_stmt_close($stmt);
            header("Location: manager.php");
            exit();
        }
    }
}

function deleteEoi($id)
{
    global $conn;

    $stmt = mysqli_prepare($conn, "DELETE FROM eoi WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $success;
}

function selectAllEois()
{
    global $conn;

    $query = "SELECT * FROM eoi ORDER BY first_name";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }

    return $result;
}

function searchByIdNameEmail($searchString)
{
    global $conn;

    $searchString = strip_tags(trim($searchString));

    $searchString = "%" . $searchString . "%";
    $query = "SELECT * FROM eoi WHERE email LIKE ? OR first_name LIKE ? OR last_name LIKE ? OR id LIKE ? ORDER BY id";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $searchString, $searchString, $searchString, $searchString);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);

    return $result;
}

function searchByNameEmail($searchString)
{
    global $conn;

    $searchString = strip_tags(trim($searchString));

    $searchString = "%" . $searchString . "%";
    $query = "SELECT * FROM eoi WHERE email LIKE ? OR first_name LIKE ? OR last_name LIKE ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $searchString, $searchString, $searchString);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);

    return $result;
}

function searchById($searchString)
{
    global $conn;

    $searchString = strip_tags(trim($searchString));

    $searchString = "%" . $searchString . "%";
    $query = "SELECT * FROM eoi WHERE id LIKE ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $searchString);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Error retrieving users: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);

    return $result;
}

function insertEoi($jobPref, $firstName, $lastName, $dob, $gender, $strAddress, $suburb, $state, $postcode, $email, $phone, $otherSkills, $skills, $cv)
{
    global $conn;
    // Create query table if not already existed
    $createTableEOIQuery = "CREATE TABLE IF NOT exists eoi (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    job_reference_number CHAR(5) DEFAULT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender BIT(1) DEFAULT NULL,
    street_address VARCHAR(40) NOT NULL,
    suburb_town VARCHAR(40) NOT NULL,
    state CHAR(3) NOT NULL,
    postcode INT(4) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(12) NOT NULL,
    other_skills VARCHAR(2000) DEFAULT NULL,
    status ENUM('New', 'Current', 'Final') DEFAULT 'New'
);";



    mysqli_query($conn, $createTableEOIQuery);

    // Generate a unique filename for cv
    $newFileName = uniqid('', true) . '.pdf';

    // Insert data into the EOI table
    $query = "INSERT INTO eoi (job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone_number, other_skills, cv_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssissssssss", $jobPref, $firstName, $lastName, $dob, $gender, $strAddress, $suburb, $state, $postcode, $email, $phone, $otherSkills, $newFileName);
    if (mysqli_stmt_execute($stmt)) {
        $EOInumber = mysqli_insert_id($conn); // Get the auto-generated EOI number
        uploadCv($cv, $newFileName) ;

        if($skills != null) {
            foreach ($skills as $skill) {
                $insertSkillQuery = "INSERT INTO eoi_skills (eoi_id, skill_id) VALUES (?, ?)";
                $stmtSkill = mysqli_prepare($conn, $insertSkillQuery);
                mysqli_stmt_bind_param($stmtSkill, "ii", $EOInumber, $skill);
                mysqli_stmt_execute($stmtSkill);
                mysqli_stmt_close($stmtSkill);
            }
        }
        
        echo "<p>Submission successfully. Thank you for your expression of interest. Your EOInumber is $EOInumber.</p>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


function uploadCv($cv, $newFileName){
    // Define a directory to store uploaded PDFs (outside the web root for security)
    $uploadDir = 'cv_uploaded/';

    // Check if form is submitted and there's no error
    if ($cv != null ) {

    // Get file information
    $tempFileName = $cv['tmp_name'];
    $fileSize = $cv['size'];

    // Validate file type (optional)
    $fileType = mime_content_type($tempFileName);
    if ($fileType !== 'application/pdf') {
        echo 'Invalid file type. Please upload a PDF file.';
        exit;
    }

    // Validate file size 
    if ($fileSize > 1000000) { // 1MB limit 
        echo 'File size exceeds limit (1MB). Please upload a smaller file.';
        exit;
    }

    // Move the uploaded file to the designated directory
    if (move_uploaded_file($tempFileName, $uploadDir . $newFileName)) {
        echo 'CV uploaded successfully!';
    } else {
        echo 'There was an error uploading the file. Please try again.';
    }
    } else {
    // Handle potential errors 
    echo 'Please select a PDF file to upload.';
    }

}
