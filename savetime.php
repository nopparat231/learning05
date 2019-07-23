
<?php
include 'conn.php';
$data1 = $_POST['data1'];
$user_id = $_POST['data2'];
$data3 = $_POST['data3'];
$user_learning_bf = $_POST['data4'];
$choice_id = $_POST['data5'];

if ($data3 === 'aff') {
	$sql1 = "UPDATE user_learning SET user_learning_time_af = '$data1' WHERE user_id = '$user_id'";


	$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

//ปิดการเชื่อมต่อ database
	mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม  
}elseif ($data3 === 'bff') {

 $user_learning_af = 'ยังไม่ทำ';
 $user_learning_time_af = 'ยังไม่ทำ';
  $sql1 = "INSERT INTO user_learning (choice_id, user_id , user_learning_bf , user_learning_af , user_learning_time_bf , user_learning_time_af, user_learning_status) VALUES('$choice_id', '$user_id', '$user_learning_bf','$user_learning_af' , '$data1' , '$user_learning_time_af' , '0' )";

	$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

//ปิดการเชื่อมต่อ database
	mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม  
}

?>