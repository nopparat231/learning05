<meta charset="UTF-8" />
<?php include '../conn.php'; ?>

<?php
$choice_id = $_GET['choice_id'];
$id = $_GET['id'];
$st = $_GET['st'];


$sql ="UPDATE testing SET status = '$st' WHERE id = $id";

$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);


if($result){
	echo "<script>";
	echo "window.location ='index.php?showchoice_s&choice_id=$choice_id'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?showchoice_s&choice_id=$choice_id'; ";
	echo "</script>";
}
?>
