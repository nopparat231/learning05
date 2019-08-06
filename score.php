<?php session_start();?>
<!DOCTYPE html>
<html>


<?php 

include 'header.php';
include 'conn.php'; 

$user_id = $_GET['user_id'];

$query_learning = "SELECT * FROM choice as c , user as u, user_learning as l where l.user_id = $user_id and l.choice_id = c.choice_id and l.user_id = u.id order by l.user_learning_af desc" ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>




<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php include 'carousel.php'; ?>
      <?php include 'navbar.php'; ?>
      <?php include 'model.php'; ?>


      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center ">
         <div class="py-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">คะแนนผู้ใช้งาน</h1>
                <hr>
              </div>

            </div>
          </div>
        </div>

        <div class="py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive text-center">
                  <?php if ($totalRows_learning > 0) {?>
                    <table class="table table-hover" id="example" bgcolor="white">


                      <thead class="thead-dark">
                        <tr class="text-center">
                          <th scope="col">ลำดับที่</th>
                          <th scope="col">วันที่</th>
                          <th scope="col">ชื่อ-นามสกุล</th>
                          <th scope="col">บทเรียน</th>
                          <th scope="col">คะแนนก่อนเรียน</th>
                          <th scope="col">คะแนนหลังเรียน</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $i = 1 ;
                        do { ?>


                          <tr class="text-center">
                            <td><?php echo $i; ?></td>
                            <td><?php echo date("d/m/Y" , strtotime($row_learning['user_learning_date'])); ?></td>
                            <td><?php echo $row_learning['Firstname']. "  " .$row_learning['Lastname']; ?></td>
                            <td><?php echo $row_learning['choice_name']; ?>
                            <td><?php echo $row_learning['user_learning_bf']; ?></td>
                            <td><?php echo $row_learning['user_learning_af']; ?></td>
                          </tr>

                          <?php 
                          $i += 1;
                        } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

                      </tbody>
                    </table>
                  <?php }else {
                    echo "<h3> ยังไม่มีคะแนน </h3>";
                  }

                  mysqli_free_result($learning);?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>

    </div>
  </div>
</div>
</div>

<!-- <style>
  .footer {
   position: fixed;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
 }
</style> --><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</html>