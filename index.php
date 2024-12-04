<?php 


    $serverName = "localhost";
    $username = "root";
    $password = "1234";
    $database = "newuser";

    $conn = new mysqli($serverName,$username,$password,$database);

    if($conn->connect_error) {
        die("Connection error: ". $conn->connect_error);
    }

    $sql = "Select firstname from persons;";
    $result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dynamic List from Database</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['firstname'] . "</li>";
                var_dump($result->fetch_assoc());
            }
        } else {
            echo "<li>No items found</li>";
        }
        $conn->close();

        ?>
    </ul>
</body>
</html>