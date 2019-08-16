
<?php include '../conn.php'; ?>

<?php 


$query_choice = "SELECT * FROM choice WHERE choice_status <> 1 ORDER BY choice_id";
$choice = mysqli_query($con,$query_choice) or die(mysqli_error());
$row_choice = mysqli_fetch_assoc($choice);
$totalRows_choice = mysqli_num_rows($choice);


?>



<?php if ($totalRows_choice > 0) {?>
  <?php do { ?>

    <?php 
    $c =  $row_choice['choice_id']; 
    $user_id = $_SESSION['UserID'];


    ?>

    <input type="text" value="<?php echo $row_choice['choice_id'];?>" hidden>

    <div class="card pmd-card">
      <div class="pmd-card-media">

        <video id="video1" width="355" style="pointer-events: none;">
          <source src="../img/<?php echo $row_choice['video']; ?>" type="video/mp4">
            Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
          </video>


        </div>
        <div class="card-body">
         <!-- Card Title -->
         <h2 class="card-title"><?php echo $row_choice['choice_name']; ?></h2>

         <!-- Card Text -->
         <p class="card-text"><h4><?php echo $row_choice['choice_detail']; ?></h4></p>

         <!-- Card Action -->
         <a href="index.php?ec&choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><p class="btn btn-xs btn-warning" >แก้ไขบทเรียน</p></a>

         <a href="index.php?showchoice_s&choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><p class="btn btn-xs btn-info" >แก้ไขคำถาม</p></a>

         <a href="del_choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&st=1"><p class="btn btn-xs btn-danger" >ลบ</p></a>

       </div>
     </div>

   <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>

 <?php } else {
  echo "<center>ไม่มีคำถาม</center>";
}
mysqli_free_result($choice);
?>
