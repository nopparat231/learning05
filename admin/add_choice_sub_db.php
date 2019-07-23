<meta charset="UTF-8" />

<?php include '../conn.php'; ?>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$choice_id = $_POST['choice_id'];
$question = $_POST['question'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$answer = $_POST['answer'];



$sql ="INSERT INTO testing (choice_id,  question ,  c1 ,  c2 ,  c3 ,  c4 ,  answer) VALUES ('$choice_id', '$question' , '$c1' , '$c2' , '$c3', '$c4' , '$answer')";
$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());

mysqli_close($con);

if($result){
	echo "<script>";
	echo "alert('เพิ่ม คำถาม เรียบร้อยแล้ว');";
	echo "window.location ='index.php?showchoice_s&choice_id=$choice_id'; ";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?showchoice_s&choice_id=$choice_id'; ";
	echo "</script>";
}
?>