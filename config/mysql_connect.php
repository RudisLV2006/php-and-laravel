<?php 

$serverName = "localhost";
$username = "root";
$password = "1234";
$database = "newuser";

$conn = new mysqli($serverName,$username,$password,$database);

if($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}


?>