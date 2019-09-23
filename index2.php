
<?php include 'conn.php'; ?>

<?php 


$query_choice = "SELECT * FROM choice WHERE choice_status <> 1 ORDER BY choice_id";
$choice = mysqli_query($con,$query_choice) or die(mysqli_error());
$row_choice = mysqli_fetch_assoc($choice);
$totalRows_choice = mysqli_num_rows($choice);



$query_watch = "SELECT * FROM choice ";
$watch = mysqli_query($con,$query_watch) or die(mysqli_error());
$row_watch = mysqli_fetch_assoc($watch);
$totalRows_watch = mysqli_num_rows($watch);



?>


<?php if ($totalRows_choice > 0) {?>
  <?php do { ?>

    <?php 
    $c =  $row_choice['choice_id']; 
    $user_id = $_SESSION['UserID'];



    $query_testing = "SELECT * FROM testing WHERE choice_id =".$c;
    $testing = mysqli_query($con,$query_testing) or die(mysqli_error());
    $row_testing = mysqli_fetch_assoc($testing);
    $totalRows_testing = mysqli_num_rows($testing);

    

    $sql3="SELECT * From user_learning WHERE user_id = $user_id AND choice_id = $c";
    $db_query3=mysqli_query($con,$sql3) or die(mysqli_error());
    $result3=mysqli_fetch_array($db_query3);
    $totalRows_query3 = mysqli_num_rows($db_query3);



    ?>
    <!-- เช็คคำถามมากกว่า 11 ถามถึงจะแสดง -->
    <?php if ($totalRows_testing >= 11){ ?>

      <?php if ($totalRows_query3 > 0){ ?>

        <?php if ($result3['user_learning_af'] == 'ยังไม่ทำ'){ ?>

          <div class="card pmd-card">
            <div class="pmd-card-media">

              <video id="video1" width="355" style="pointer-events: none;" >
                <source src="img/<?php echo $row_choice['video']; ?>" type="video/mp4">
                  Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
                </video>


              </div>
              <div class="card-body">
               <!-- Card Title -->
               <h2 class="card-title"><?php echo $row_choice['choice_name']; ?></h2>

               <!-- Card Text -->
               <p class="card-text"><h4><?php echo $row_choice['choice_detail']; ?></h4></p>

               <!-- Card Action -->
               <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><p class="btn btn-xs btn-info" >ทำแบบทดสอบก่อนเรียนแล้ว</p></a>
             </div>
           </div>

         <?php }else{ ?>



          <div class="card pmd-card">
            <div class="pmd-card-media">

              <video id="video1" width="355" style="pointer-events: none;">
                <source src="img/<?php echo $row_choice['video']; ?>" type="video/mp4">
                  Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
                </video>


              </div>
              <div class="card-body">
               <!-- Card Title -->
               <h2 class="card-title"><?php echo $row_choice['choice_name']; ?></h2>

               <!-- Card Text -->
               <p class="card-text"><h4><?php echo $row_choice['choice_detail']; ?></h4></p>

               <!-- Card Action -->
               <a href="watch.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff&cff"><p class="btn btn-xs btn-danger">ทำแบบทดสอบแล้ว</p></a>
             </div>
           </div>


         <?php  } ?>


       <?php }else{?>

         <div class="card pmd-card">
          <div class="pmd-card-media">

            <video id="video1" width="355" style="pointer-events: none;">
              <source src="img/<?php echo $row_choice['video']; ?>" type="video/mp4">
                Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
              </video>

            </div>
            <div class="card-body">
             <!-- Card Title -->
             <h2 class="card-title"><?php echo $row_choice['choice_name']; ?></h2>

             <!-- Card Text -->
             <p class="card-text"><h4><?php echo $row_choice['choice_detail']; ?></h4></p>

             <!-- Card Action -->
             <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&bff=bff" ><p class="btn btn-xs btn-success" >เข้าสู่บทเรียน</p></a>
           </div>
         </div>

       <?php } ?>
     <?php } ?>
   <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>

 <?php }
 mysqli_free_result($choice);
 ?>
