<meta charset="UTF-8" />

<?php include '../conn.php'; ?>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$choice_id = $_POST['choice_id'];
$choice_name = $_POST['choice_name'];
$choice_detail = $_POST['choice_detail'];
$video = $_POST['video'];


$sql ="UPDATE choice SET choice_name='$choice_name',video='$video' ,choice_detail='$choice_detail'	WHERE choice_id = $choice_id";

$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());

mysqli_close($con);

if($result){
	echo "<script>";
	echo "alert('แก้ไข หมวดหมู่ เรียบร้อยแล้ว');";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
}
?>