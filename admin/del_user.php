<meta charset="UTF-8" />
<?php include '../conn.php'; ?>

<?php

$User_id = $_GET['User_id'];

$Userlevel = $_GET['Userlevel'];



$sql ="UPDATE user SET Userlevel = '$Userlevel' WHERE ID = '$User_id'";


$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);


if($result){
	echo "<script>";
	echo "window.location ='index.php?su'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?su'; ";
	echo "</script>";
}
?>
