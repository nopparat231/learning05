<?php
require_once('conn.php');


$strSQL = "SELECT * FROM user WHERE session_id = '".trim($_GET['sid'])."' AND ID = '".trim($_GET['ID'])."' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
  echo "<script>";
  echo "alert('การยืนยันบัญชีไม่สำเร็จ !');";
  //echo "window.location ='index.php'; ";
  echo "</script>";

}
else
{
  $strSQL = "UPDATE user SET Status = 'Y'  WHERE session_id = '".trim($_GET['sid'])."' AND ID = '".trim($_GET['ID'])."' ";
  $objQuery = mysqli_query($con,$strSQL);
  echo "<script>";
  echo "alert('การยืนยันบัญชีสำเร็จ !');";
  echo "window.location ='index.php'; ";
  echo "</script>";

}


mysqli_close();
?>
