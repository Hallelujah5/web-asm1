<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/updateUserForm.css">
    </head>
    <body>

        <?php
        
        if(isset($_GET["id"])){
                include_once("eoiControl.php");
                $result = searchById($_GET["id"]);
                if($user = mysqli_fetch_assoc($result)){
        ?>
            
            <h1>Update user form</h1>
            <form method="post" action="eoiControl.php">
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"><br>
                <input type="hidden" name="action" value="UPDATE"><br>
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" required><br>
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>
                <label for="job_reference_number">Job Reference Number:</label><br>
                <input type="text" id="job_reference_number" name="job_reference_number" value="<?php echo $user['job_reference_number']; ?>" required><br>
                <label for="date_of_birth">Date of Birth:</label><br>
                <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $user['date_of_birth']; ?>" required><br>
                <select id="gender" name="gender" required><br>
                    <option value="0" <?php if($user['gender'] == 0) echo 'selected'; ?>>Male</option><br>
                    <option value="1" <?php if($user['gender'] == 1) echo 'selected'; ?>>Female</option><br>
                </select><br>
                <label for="street_address">Street Address:</label><br>
                <input type="text" id="street_address" name="street_address" value="<?php echo $user['street_address']; ?>" required><br>
                <label for="suburb_town">Suburb/Town:</label><br>
                <input type="text" id="suburb_town" name="suburb_town" value="<?php echo $user['suburb_town']; ?>" required><br>
                <label for="state">State:</label><br>
                <input type="text" id="state" name="state" value="<?php echo $user['state']; ?>" required><br>
                <label for="postcode">Postcode:</label><br>
                <input type="text" id="postcode" name="postcode" value="<?php echo $user['postcode']; ?>" required><br>
                <label for="phone_number">Phone Number:</label><br>
                <input type="text" id="phone_number" name="phone_number" value="<?php echo $user['phone_number']; ?>" required><br>
                <label for="status">Status:</label><br>
                <select id="status" name="status" required><br>
                    <option value="New" <?php if($user['status'] == 'New') echo 'selected'; ?>>New</option><br>
                    <option value="Current" <?php if($user['status'] == 'Current') echo 'selected'; ?>>Current</option><br>
                    <option value="Final" <?php if($user['status'] == 'Final') echo 'selected'; ?>>Final</option><br> 
                </select><br>
                <label for="other_skills">Other skills:</label><br>
                <input type="text" id="other_skills" name="other_skills" value="<?php echo $user['other_skills']; ?>" required><br>
                <br><br>
                <button type="submit">Update User</button><br>
            </form>
        <?php
                }
            }
        ?>


    </body>
</html>
