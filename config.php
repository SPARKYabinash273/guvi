<?php
$servername = "remotemysql.com";
$username = "F0MyBrwA2Y";
$password = "BzIuKsSyUi";
$database = "F0MyBrwA2Y";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



