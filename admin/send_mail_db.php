<meta charset="UTF-8" />

<?php

if (isset($_POST['m']) <> '') { 

  $massage = $_POST['massage'];
  include('../conn.php');
  $checkemail = "SELECT Userlevel,email FROM user WHERE Userlevel = 'M'";
  $resultemail = mysqli_query($con,$checkemail);

  while ($row = mysqli_fetch_array($resultemail)) 
  {

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = $row['email'];
    
    $subject = "sharelearningmedia.com";
    $message = $massage;
    $headers = "From:" . $from . "\r\n";
    // $headers .= "Bcc:" . $bcc . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $mailsend = mail($to,$subject,$message, $headers);
  }
  if ($mailsend) {
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ User สำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }else{
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ User ไม่สำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }



}elseif (isset($_POST['a']) <> '') {

 $massage = $_POST['massage'];
 include('../conn.php');
 $checkemail = "SELECT Userlevel,email FROM user WHERE Userlevel = 'A'";
 $resultemail = mysqli_query($con,$checkemail);

 while ($row = mysqli_fetch_array($resultemail)) 
 {

  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $from = "sharelea@sharelearningmedia.com";
  $to = $row['email'];

  $subject = "sharelearningmedia.com";
  $message = $massage;
  $headers = "From:" . $from . "\r\n";
    // $headers .= "Bcc:" . $bcc . "\r\n";
  $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  $mailsend = mail($to,$subject,$message, $headers);
}
  if ($mailsend) {
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ Admin สำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }else{
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ Admin ไม่สำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }



}elseif (isset($_POST['am']) <> '') {

  $massage = $_POST['massage'];
  include('../conn.php');
  $checkemail = "SELECT Userlevel,email FROM user WHERE Userlevel = 'M' and Userlevel = 'A'";
  $resultemail = mysqli_query($con,$checkemail);

  while ($row = mysqli_fetch_array($resultemail)) 
  {

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = $row['email'];
    
    $subject = "sharelearningmedia.com";
    $message = $massage;
    $headers = "From:" . $from . "\r\n";
    // $headers .= "Bcc:" . $bcc . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $mailsend = mail($to,$subject,$message, $headers);
  }
    if ($mailsend) {
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ทุกคนสำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }else{
    echo "<script>";
    echo "alert(\" ส่งเมล์ให้ทุกคนไม่สำเร็จ \");"; 
    echo "window.location ='index.php';";
    echo "</script>";
  }



}
?>
