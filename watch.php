<?php session_start();?>
<html>


<?php include 'conn.php'; ?>
<?php 
$choice_id = $_GET['choice_id'];
$user_id = $_GET['user_id'];

$query_watch = "SELECT * FROM choice where choice_id = $choice_id ";
$watch = mysqli_query($con,$query_watch) or die(mysqli_error());
$row_watch = mysqli_fetch_assoc($watch);
$totalRows_watch = mysqli_num_rows($watch);
?>


<?php include 'header.php'; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><b><?php echo $row_watch['choice_name']; ?></b></h1>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">


      <?php if ($totalRows_watch > 0) {?>

        <?php
        $cff = isset($_GET['cff']);

        ?>
        <?php if ($cff <> ''): ?>

          <div class="embed-responsive embed-responsive-16by9">
            <video width="355" id="myVideo" controls="controls" >
              <source src="img/<?php echo $row_watch['video']; ?>" type="video/mp4">
                Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
              </video> 
            </div>



            <br>
            <button onclick="playVid()" type="button" id="play" class="btn btn-primary" style="display: none;">Play Video</button>
            <button onclick="pauseVid()" type="button" id="pause" class="btn btn-warning" style="display: none;">Pause Video</button>
            <a href="choice.php?choice_id=<?php echo $row_watch['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff&cff=cff" type="button" class="btn btn-success" id="next" style="display: block;">ทำแบบทดสอบ</a>
            <br> 



            <?php else: ?>

              <div class="embed-responsive embed-responsive-16by9">
                <video width="355" id="myVideo" >
                  <source src="img/<?php echo $row_watch['video']; ?>" type="video/mp4">
                    Your browser does not support HTML5 video. กรุณาเปิดใน Google Chrome
                  </video> 
                </div>


                <br>
                <button onclick="playVid()" type="button" id="play" class="btn btn-primary">Play Video</button>
                <button onclick="pauseVid()" type="button" id="pause" class="btn btn-warning">Pause Video</button>
                <a href="choice.php?choice_id=<?php echo $row_watch['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff" type="button" class="btn btn-success" id="next" style="display: none;">ทำแบบทดสอบ</a>
                <br> 



              <?php endif ?>




            <?php } ?>


          </div>
        </div>
      </div>

    </body>
    <br><br><br>
    <?php include 'footer.php'; ?>
    </html>
    <script> 
      var vid = document.getElementById("myVideo"); 

      $(document).ready(function(){
        $('video').on('ended',function(){
          document.getElementById("next").style.display = "block";
          document.getElementById("play").style.display = "none";
          document.getElementById("pause").style.display = "none";
        });
      });


      
      function playVid() { 
        vid.play(); 
      } 

      function pauseVid() { 
        vid.pause(); 
      } 
    </script> 