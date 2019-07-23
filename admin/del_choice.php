<meta charset="UTF-8" />
<?php include '../conn.php'; ?>

<?php

$choice_id = $_GET['choice_id'];

$st = $_GET['st'];


$sql ="UPDATE choice SET choice_status = '$st' WHERE choice_id = $choice_id";


$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);


if($result){
	echo "<script>";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
}
?>
