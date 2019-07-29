
<?php 

$query_learning = "SELECT * FROM choice order by choice_id";
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);




?>

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
          <table class="table table-striped table-bordered" id="example">
           <?php if ($totalRows_learning > 0) {?>

            <thead>
              <tr class="text-center">
                <th scope="col" width="5">ลำดับ</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">URl Youtube</th>

                <th scope="col" width="5">แก้ไข</th>
                <th scope="col" width="5">สถานะ</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $i = 1 ;
              do { ?>


                <tr class="text-center">

                  <td><?php echo $i ?></td>
                  <td><?php echo $row_learning['choice_name']; ?></td>
                  <td><?php echo $row_learning['video']; ?></td>

                  <td>
                    <a href="edit_choice.php?choice_id=<?php echo $row_learning['choice_id'];?>" class="btn btn-outline-warning my-2 my-sm-0" >แก้ไข</a>
                  </td>

                  <?php if ($row_learning['choice_status'] <> 1 ): ?>
                    <td>
                      <a href="del_choice.php?choice_id=<?php echo $row_learning['choice_id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกคำถาม');">ยกเลิก</a>
                    </td>
                    <?php else: ?>
                     <td>
                      <a href="del_choice.php?choice_id=<?php echo $row_learning['choice_id'];?>&st=0" class="btn btn-outline-info my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานคำถาม');">ใช้งาน</a>
                    </td>
                  <?php endif ?>
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

