

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

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$password = base64_encode($pass);


$sql = $conn->prepare("SELECT id from User WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$result = $sql->get_result();
$count = $result->num_rows;

if ($count == 1) {
    
     echo "1";
} else {
    
     
// prepare and bind
$sql = $conn->prepare("INSERT INTO User (name , email , password , phone , gender , dob , age) VALUES (?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("sssssss", $name, $email, $password, $phone, $gender, $dob, $age);

$sql->execute();
    
     $myFile = "data.json";
        $arr_data = array(); // create empty array
        $result = $conn->query("SELECT * FROM User");
//Initialize array variable
        $dbdata = array();

//Fetch into associative array
    while ($row = $result->fetch_assoc()) {
        $dbdata[] = $row;
    }



    $jsondata = json_encode($dbdata, JSON_PRETTY_PRINT);
    //echo $jsondata;
    
    file_put_contents($myFile, $jsondata);
   
    



$sql->close();

}



