<?php session_start();?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

include("conn.php");
$password = $_REQUEST['Password'];
$Username = $_REQUEST['Username'];

$strSQL = "SELECT * FROM user WHERE Username = '".mysqli_real_escape_string($con,$Username)."' 
and Password = '".mysqli_real_escape_string($con,$password)."'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

$check = "SELECT * FROM user WHERE Status = 'Y' and Username = '".mysqli_real_escape_string($con,$Username)."'";
$resultemail = mysqli_query($con,$check);
$objResultcheck = mysqli_fetch_array($resultemail);

$checklav = "SELECT * FROM user WHERE Userlevel = 'E' and Username = '".mysqli_real_escape_string($con,$Username)."'";
$resultemaillav = mysqli_query($con,$checklav);
$objResultchecklav = mysqli_fetch_array($resultemaillav);

$d = date("Y-m-d");
$checkdate = "SELECT * FROM user WHERE user_date < '$d' and Username = '".mysqli_real_escape_string($con,$Username)."'";
$resultemaildate = mysqli_query($con,$checkdate);
$objResultcheckdate = mysqli_fetch_array($resultemaildate);


if(!$objResult)
{
  echo "<script>";
  echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
  echo "window.history.back()";
  echo "</script>";

}
elseif($objResultchecklav > 0)
{
  echo '<script charset="UTF-8">';
  echo "alert(\" User ของท่านถูกระงับการใช้งาน\");"; 
  echo "window.location ='logout.php';";
  echo "</script>";

}
elseif($objResultcheckdate > 0)
{
  echo '<script charset="UTF-8">';
  echo "alert(\" User ของท่านหมดอายุการใช้งาน\");"; 
  echo "window.location ='logout.php';";
  echo "</script>";

}
elseif($objResultcheck > 0)
{


  $_SESSION["UserID"] = $objResult["ID"];
  $_SESSION["User"] = $objResult["Firstname"]." ".$objResult["Lastname"];
  $_SESSION["Userlevel"] = $objResult["Userlevel"];


  session_write_close();

  if($objResult["Userlevel"] == "A")
  {
    Header("Location: admin/");
  }
  elseif($objResult["Userlevel"]=="M")
  {
    Header("Location: index1.php");


  }

}else{

  echo '<script charset="UTF-8">';
  echo "alert(\" กรุณายืนยัน User ที่ E-mail ที่ท่านสมัคร\");"; 
  echo "window.history.back()";
  echo "</script>";

}
mysqli_close($con);
?>