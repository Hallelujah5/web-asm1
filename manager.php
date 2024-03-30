<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>


        <form action="manager.php" method="get">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" placeholder="Enter search for email, name or user id">
            <button type="submit">Submit</button>
        </form>

    
        <?php
            include_once("eoiControl.php");
            include_once("workControl.php");

            if(!isset($_GET["search"]) || $_GET["search"] == ""){
                $eois = selectAllEois();
            }
            else{
                $eois = searchByIdNameEmail($_GET["search"]);
            }
        ?>
        <table border="1">
            <tr>
                <th>EOI ID</th>
                <th>Job reference number</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Street Address</th>
                <th>Suburb/Town</th>
                <th>State</th>
                <th>Postcode</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>Skills</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            <?php
                while ($eoi = mysqli_fetch_assoc($eois)) {
                    echo "<tr>";
                    echo "<td>" . $eoi['id'] . "</td>";
                    echo "<td>" . $eoi['job_reference_number'] . "</td>";
                    echo "<td>" . $eoi['email'] . "</td>";
                    echo "<td>" . $eoi['first_name'] . "</td>";
                    echo "<td>" . $eoi['last_name'] . "</td>";
                    echo "<td>" . $eoi['date_of_birth'] . "</td>";
                    echo "<td>" . ($eoi['gender'] == 1 ? 'Female' : 'Male') . "</td>";
                    echo "<td>" . $eoi['street_address'] . "</td>";
                    echo "<td>" . $eoi['suburb_town'] . "</td>";
                    echo "<td>" . $eoi['state'] . "</td>";
                    echo "<td>" . $eoi['postcode'] . "</td>";
                    echo "<td>" . $eoi['phone_number'] . "</td>";
                    echo "<td>" . $eoi['status'] . "</td>";
                    echo "<td>";
                    $skills = searchSkillsById($eoi['id']);
                    while ($skill = mysqli_fetch_assoc($skills)) {
                        echo $skill['skill_name'] . " ";
                    }
                    echo '</td>';

                    if($eoi["other_skills"] == null || $eoi["other_skills"] == ""){
                        echo "<td> No other skill </td>";
                    } else {
                        echo "<td>" . $eoi['other_skills'] . "</td>";
                    }


                    echo 
                    "<td>
                        <form method='post' action='eoiControl.php'>
                            <input type='hidden' name='id' value='" . $eoi['id'] . "'>
                            <input type='hidden' name='action' value='DELETE'>
                            <button type='submit'>Delete</button>
                        </form>

                        <form method='get' action='updateUserForm.php'>
                            <input type='hidden' name='id' value='" . $eoi['id'] . "'>
                            <button type='submit'>Update</button>
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>