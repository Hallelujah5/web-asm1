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
            <input type="text" id="search" name="search" placeholder="Enter search term">
            <button type="submit">Submit</button>
        </form>

    
        <?php
            include_once("userControl.php");

            if(!isset($_GET["search"]) || $_GET["search"] == ""){
                $eois = selectAllEois();
            }
            else{
                $eois = searchByEoiId($_GET["search"]);
            }
        ?>
        <table>
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
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>