<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}
?>
<?php 

$query_model = "SELECT * FROM choice";
$model = mysqli_query($con,$query_model) or die(mysqli_error());
$row_model = mysqli_fetch_assoc($model);
$totalRows_model = mysqli_num_rows($model);




?>
<?php if (isset($_REQUEST['sco']) <> ''): ?>


  <div class="col-md-9">
   <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center" >หมวดหมู่ทั้งหมด</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <br>

            <?php include 'add_choice.php'; ?>
            <?php if (isset($_GET['choice_id'])) {
              include 'edit_choice.php';
            }  ?>



            <a href="showchoice.php" class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target='#addchoiceModal'>เพิ่มหมวดหมู่</a>
            <table class="display" id="example">
             <?php if ($totalRows_model > 0) {?>

              <thead>
                <tr class="text-center">
                  <th scope="col" width="5">ลำดับ</th>
                  <th scope="col">ชื่อบทเรียน</th>
                  <th scope="col">ลิ้งค์</th>

                  <th scope="col" width="15">สื่อการเรียนรู้</th>
                  <th scope="col" width="5">แก้ไข</th>
                  <th scope="col" width="5">ยกเลิก</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $i = 1 ;
                do { ?>


                  <tr class="text-center">

                    <td><?php echo $i ?></td>
                    <td><?php echo $row_model['choice_name']; ?></td>
                    <td><?php echo $row_model['video']; ?></td>
                    <?php  

                    $url = $row_model['video'];
                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                    $id = $matches[1];
                    $width = '200px';
                    $height = '115px';
                    ?>


                    <td>
                      <iframe width="200" height="100" src="https://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </td>
                    <td>
                      <a href="index.php?sco&choice_id=<?php echo $row_model['choice_id'];?>" class="btn btn-outline-warning my-2 my-sm-0"><i class="far fa-edit"></i></a>
                    </td>
                    <?php if ($row_model['choice_status'] <> 1 ): ?>
                     <td> 
                      <a href="del_choice.php?choice_id=<?php echo $row_model['choice_id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกหมวดหมู่');"><i class="fas fa-ban"></i></a>
                    </td>
                    <?php else: ?>
                      <td> 
                        <a href="del_choice.php?choice_id=<?php echo $row_model['choice_id'];?>&st=0" class="btn btn-outline-info my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานหมวดหมู่');"><i class="fas fa-redo"></i></i></i></a>
                      </td>
                    <?php endif ?>


                  </tr>

                  <?php 
                  $i += 1;
                } while ($row_model = mysqli_fetch_assoc($model)); ?>

              </tbody>
            </table>
          <?php }else {
            echo "<h3> ยังไม่มีคะแนน </h3>";
          }

          mysqli_free_result($model);?>

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




<?php else: ?>

  <div class="col-md-9">
   <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center" >หมวดหมู่ทั้งหมด</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <br>

            <?php include 'add_choice.php'; ?>




            <a href="showchoice.php" class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target='#addchoiceModal'>เพิ่มหมวดหมู่</a>
            <table class="display" id="example">
             <?php if ($totalRows_model > 0) {?>

              <thead>
                <tr class="text-center">
                  <th scope="col" width="5">ลำดับ</th>
                  <th scope="col">ชื่อบทเรียน</th>
                  <th scope="col">รายละเอียด</th>

                  <th scope="col" width="5">แก้ไข</th>
                  <th scope="col" width="5">ยกเลิก</th>
                  <th scope="col" width="5">สื่อ</th>
                  <th scope="col" width="5">แบบทดสอบ</th>
                  <th scope="col" width="5">คะแนน</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $i = 1 ;
                do { ?>


                  <tr class="text-center">

                    <td><?php echo $i ?></td>
                    <td><?php echo $row_model['choice_name']; ?></td>
                    <td><?php echo $row_model['choice_detail']; ?></td>

                    <td>
                      <a href="edit_choice.php?choice_id=<?php echo $row_model['choice_id'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="far fa-edit"></i></a>
                    </td>

                    <?php if ($row_model['choice_status'] <> 1 ): ?>
                     <td> 
                      <a href="del_choice.php?choice_id=<?php echo $row_model['choice_id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกหมวดหมู่');"><i class="fas fa-ban"></i></a>
                    </td>
                    <?php else: ?>
                      <td> 
                        <a href="del_choice.php?choice_id=<?php echo $row_model['choice_id'];?>&st=0" class="btn btn-outline-info my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานหมวดหมู่');"><i class="fas fa-redo"></i></a>
                      </td>
                    <?php endif ?>

                    <td>
                      <a href="index.php?sco" class="btn btn-outline-danger my-2 my-sm-0" ><i class="fab fa-youtube"></i></a>
                    </td>

                    <td>
                      <a href="index.php?showchoice_s&choice_id=<?php echo $row_model['choice_id'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="far fa-file-alt"></i></a>
                    </td>

                    <td>
                      <a href="index.php?in&choice_id=<?php echo $row_model['choice_id']; ?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-list-ol text-muted fa-mg"></i></a>
                    </td>

                  </tr>

                  <?php 
                  $i += 1;
                } while ($row_model = mysqli_fetch_assoc($model)); ?>

              </tbody>
            </table>
          <?php }else {
            echo "<h3> ยังไม่มีคะแนน </h3>";
          }

          mysqli_free_result($model);?>

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


<?php endif ?>

