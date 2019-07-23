
<meta charset="UTF-8" />

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<?php
include('../conn.php');   //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$Firstname = $_REQUEST["Firstname"];
$Lastname = $_REQUEST["Lastname"];


$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$id = $_REQUEST["id"];



$sql ="UPDATE user SET 

Firstname='$Firstname',
Lastname='$Lastname',
email='$email',
phone='$phone'
WHERE id=$id
";

$result = mysqli_query($con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);
?>
<?php if($result){ ?>


	<script type="text/javascript">

		var $ws = 'index.php?sp&user_id=<?php echo $id ?>';

		setTimeout(function () { 
			swal({
				title: "แก้ไขข้อมูลสำเร็จ",

				type: "success",

				confirmButtonText: "ยืนยัน"
			},
			function(isConfirm){
				if (isConfirm) {
					window.location.href = $ws;
				}
			}); }, 50);

		</script>
	<?php } else { ?>



		<script type="text/javascript">

			var $ws = 'index.php?sp&user_id=<?php echo $id ?>';

			setTimeout(function () { 
				swal({
					title: "แก้ไขไม่สำเร็จ",

					type: "error",

					confirmButtonText: "ลองใหม่อีกครั้ง"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = $ws;
					}
				}); }, 50);

			</script>

		<?php } ?>

