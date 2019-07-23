
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php  if (isset($_POST['email'])) { 


  $email = $_POST['email'];

  include('conn.php');
  $checkemail = "SELECT * FROM user WHERE email = '$email'";
  $resultemail = mysqli_query($con,$checkemail);
  $objResult = mysqli_fetch_array($resultemail);
  $numemail = mysqli_num_rows($resultemail);
  $massage = "<h2>สวัสดีคุณ : <b>".$objResult['Firstname']."</b></h2><br><h1> รหัสผ่านของคุณคือ : ".$objResult['Password']."</h1>";
  if ($numemail > 0 ){


     ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = $email;
    $subject = "รหัสผ่านสำหรับเว็บ sharelearningmedia.com";
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
          title: "กรุณาตรวจสอบ รหัสผ่านที่ E-mail",

          type: "success",

          confirmButtonText: "ตกลง"
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
            title: " Server มีปัญหา กรุณารอสักครู่แล้วลองใหม่",

            type: "error",

            confirmButtonText: "ตกลง"
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = $ws;
            }
          }); }, 50);


        </script>

      <?php   }

    }else{ ?>

     <script type="text/javascript">
      var $ws = 'index.php';

      setTimeout(function () { 
        swal({
          title: "ไม่พบที่อยู่ E-Mail กรุณาตรวจสอบ E-mail ที่ท่านใช้สมัคร",

          type: "error",

          confirmButtonText: "ลองใหม่อีกครั้ง"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = $ws;
          }
        }); }, 50);


      </script>

    <?php  }
  }

  ?>
