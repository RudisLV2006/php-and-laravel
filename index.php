<?php 
    include('template/header.php');

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
<body>
    <div class="clear">
        <h1 style="text-align: center;">Dynamic List from Database</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['firstname'] . "</li>";
            }
        } else {
            echo "<li>No items found</li>";
        }
        $conn->close();

        ?>
    </ul>
</div>
    
</body>
</html>