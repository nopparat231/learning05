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

   $d = date("Y-m-d");
      $user_date = date('Y-m-d', strtotime('+2 years', strtotime($d)));
			$sql = "INSERT INTO user (Firstname, Lastname, Username, Password, email ,phone , Userlevel , user_date ,   user_stid , session_id ,  Status)
			VALUES('Firstname', 'Lastname', 'Username', 'Password', 'email' , '044444444' , 'm'  , '$user_date', ,$user_stid' , '$session_id', '$Status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>