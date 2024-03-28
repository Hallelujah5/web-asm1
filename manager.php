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
        <?php
            include_once("userControl.php");
    
            $users = selectAllUsers();
        ?>
        <table>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php
                while ($user = mysqli_fetch_assoc($users)) {
                    echo "<tr>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['name'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        ?>
    </body>
</html>