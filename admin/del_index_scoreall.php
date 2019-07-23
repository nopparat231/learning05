<meta charset="UTF-8" />
<?php include '../conn.php'; ?>

<?php

$user_learning_id = $_GET['user_learning_id'];

$st = $_GET['st'];


$sql ="UPDATE user_learning SET user_learning_status = '$st' WHERE user_learning_id = $user_learning_id";


$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);


if($result){
	echo "<script>";
	echo "window.location ='index.php?in'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?in'; ";
	echo "</script>";
}
?>
