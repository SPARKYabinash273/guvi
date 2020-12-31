<?php
$servername = "r6ze0q02l4me77k3.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "xi405pg8ncdf3bs7";
$password = "n07zrc7kikss3x78";
$database = "tg8ggylf2hstpz6z";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



