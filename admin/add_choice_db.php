<meta charset="UTF-8" />

<?php include '../conn.php'; ?>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );



$choice_name = $_POST['choice_name'];
//$video = $_POST['video'];
$choice_detail = $_POST['choice_detail'];


$ran = rand();
$fileName = $ran.$_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
	echo "ERROR: Please browse for a file before clicking the upload button.";
	exit();
}
if(move_uploaded_file($fileTmpLoc, "../img/$fileName")){


$sql ="INSERT INTO choice (choice_name,  video ,  choice_detail , choice_status) VALUES ('$choice_name', '$fileName' , '$choice_detail' , 0)";
$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());
}
mysqli_close($con);

if($result){
	echo "<script>";
	echo "alert('เพิ่ม หมวดหมู่ เรียบร้อยแล้ว');";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?sc'; ";
	echo "</script>";
}
?>
