<?php
$servername = "localhost";
$username = "shpjmcom_05";
$password = "Password23";
$dbname = "shpjmcom_05";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO choice (choice_name,video,choice_detail,choice_status) VALUES ('gg', 'gg' , 'gg' ,0) ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>