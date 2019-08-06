
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


    $cff = isset($_GET['cff']);
    $url = $row_choice['video'];
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
    $width = '800px';
    $height = '450px';

    ?>


      <div class="card pmd-card">
        <div class="pmd-card-media">
          <iframe id="existing-iframe-example" type="text/html" class="img-fluid" width="<?php echo $width ?>" height="<?php echo $height ?>"
            src="https://www.youtube.com/embed/<?php echo $id ?>?enablejsapi=1&autoplay=0&amp;controls=1&amp;rel=0&amp;fs=0&amp;enablejsapi=1" frameborder="0" style="pointer-events: none;" >
          </iframe> 

        </div>
        <div class="card-body">
         <!-- Card Title -->
         <h2 class="card-title"><?php echo $row_choice['choice_name']; ?></h2>

         <!-- Card Text -->
         <p class="card-text"><h4><?php echo $row_choice['choice_detail']; ?></h4></p>

         <!-- Card Action -->
         <a href="edit_choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff" data-toggle='modal' data-target='#editchoiceModal'><p class="btn btn-xs btn-info" >แก้ไข</p></a>

         <a href="edit_choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff" data-toggle='modal' data-target='#addchoiceModal'><p class="btn btn-xs btn-danger" >ยกเลิก</p></a>
       </div>
     </div>

 <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>

<?php } else {
  echo "<center>ไม่มีคำถาม</center>";
}
mysqli_free_result($choice);
?>
