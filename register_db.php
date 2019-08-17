<?php session_start();?>
<meta charset="UTF-8" />

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
include('conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$Firstname = $_REQUEST["Firstname"];
$Lastname = $_REQUEST["Lastname"];
$Username = $_REQUEST["Username"];
$Password = $_REQUEST["Password"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$user_stid = $_REQUEST["user_stid"];
$Userlevel = $_REQUEST["Userlevel"];
$Status = "N";
$session_id = session_id();

$check = "SELECT Username FROM user WHERE Username = '$Username'";
$result = mysqli_query($con,$check);
$num = mysqli_num_rows($result);

$checkemail = "SELECT email FROM user WHERE email = '$email'";
$resultemail = mysqli_query($con,$checkemail);
$numemail = mysqli_num_rows($resultemail);

if ($numemail > 0 ){ ?>

	<script type="text/javascript">

		var $ws = 'index.php';

		setTimeout(function () { 
			swal({
				title: "E-mail นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง",

				type: "error",

				confirmButtonText: "ลองใหม่อีกครั้ง"
			},
			function(isConfirm){
				if (isConfirm) {
					window.location.href = $ws;
				}
			}); }, 50);
		</script>

	<?php }elseif ($num > 0 ){ ?>

		<script type="text/javascript">

			var $ws = 'index.php';

			setTimeout(function () { 
				swal({
					title: "ชื่อผู้ใช้นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง",

					type: "error",

					confirmButtonText: "ลองใหม่อีกครั้ง"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = $ws;
					}
				}); }, 50);
			</script>

		<?php }else{
	//เพิ่มเข้าไปในฐานข้อมูล
      $d = date("Y-m-d");
      $user_date = date('Y-m-d', strtotime('+2 years', strtotime($d)));
			$sql = "INSERT INTO user (Firstname, Lastname, Username, Password, email ,phone , Userlevel , user_date ,   user_stid , session_id ,  Status)
			VALUES('$Firstname', '$Lastname', '$Username', '$Password', '$email' , '$phone' , '$Userlevel'  , '$user_date', '$user_stid' , '$session_id', '$Status')";

			$result1 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
			$ID = mysqli_insert_id($con) or die ("Error in query: $sql " . mysqli_error());
			$ma = "https://education.shpjm.com/register_db_active.php?sid=".$session_id."&ID=".$ID."<br>";
     $massage = "<h3> Activate user account</h3><br>".$ma;
   }
	//ปิดการเชื่อมต่อ database
   mysqli_close($con);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

   if($result1){

     ini_set( 'display_errors', 1 );
     error_reporting( E_ALL );
     $from = "education@shpjm.com";
     $to = $email;
     $subject = "Activate user account education.shpjm.com";
     $message = $massage;
     $headers = "From:" . $from . "\r\n";
     $headers .= "Content-Type: text/html; charset=utf-8\r\n";
     $mailsend = mail($to,$subject,$message, $headers);

     if($mailsend){
       ?>

       <script type="text/javascript">

         var $ws = 'index.php';

         setTimeout(function () { 
           swal({
             title: "สมัครสมาชิกสำเร็จ กรุณายืนยันที่ E-mail ที่ท่านสมัคร",

             type: "success",

             confirmButtonText: "ยืนยัน"
           },
           function(isConfirm){
             if (isConfirm) {
               window.location.href = $ws;
             }
           }); }, 50);

         </script>


       <?php }else{ ?>



        <script type="text/javascript">

          var $ws = 'index.php';

          setTimeout(function () { 
            swal({
              title: "ส่งเมล์ไม่สำเร็จ",

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

      <?php }else{ ?>
       <script type="text/javascript">

         var $ws = 'index.php';

         setTimeout(function () { 
           swal({
             title: "สมัครสมาชิกไม่สำเร็จ",

             type: "error",

             confirmButtonText: "ลองใหม่อีกครั้ง"
           },
           function(isConfirm){
             if (isConfirm) {
               window.location.href = $ws;
             }
           }); }, 50);

         </script>
         <?php }?>