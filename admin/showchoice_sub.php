

<style type="text/css" media="screen">
  .tru{
    color: green;
  }
  .fau{
    color: red;
  }
  .bu{
    width: 90px;
  }
</style>

<?php 
$choice_id = $_GET['choice_id'];


$query_learning = "SELECT * FROM testing WHERE choice_id = '$choice_id' order by id desc " ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>


<div class="col-md-9">
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" >คำถามทั้งหมด</h1>
      </div>
    </div>
  </div>
</div>

<div class="table-responsive">
  <br>
  <?php include 'add_choice_sub.php'; ?>
  <P style="text-align: right;">
    <a href="showchoice_sub.php" class="btn btn-outline-success my-2 my-sm-0"  data-toggle='modal' data-target='#addchoicesubModal'>เพิ่มคำถาม</a></P>

    <table class="display" id="example">
     <?php if ($totalRows_learning > 0) {?>

      <thead>
        <tr class="text-center">
          <th scope="col" width="5%" >ลำดับ</th>
          <!--  <th scope="col">หมวดหมู่</th> -->
          <th scope="col" width="30%">คำถาม</th>
          <th scope="col" width="35%">รายละเอียดคำตอบ</th>

          <th scope="col" class="text-left" ></th>
          <th scope="col" width="5%">สถานะ</th>
          <th scope="col" width="5%">จัดการ</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i = 1 ;
        do { ?>

          <?php

          $query_learningc = "SELECT * FROM choice where choice_id = '$choice_id' and choice_id = ".$row_learning['choice_id'];
          $learningc = mysqli_query($con,$query_learningc) or die(mysqli_error());
          $row_learningc = mysqli_fetch_assoc($learningc);
          $totalRows_learningc = mysqli_num_rows($learningc);

          ?>
          <tr class="text-left">
            <td class="text-center"><?php echo $i ?></td>
            <!--  <td><?php //echo $row_learningc['choice_name']; ?></td> -->
            <td>
              <?php echo mb_substr($row_learning['question'], 0 , 25,'UTF-8'); ?><b>...</b><br>
            </td>
            <td>
              1). <?php echo mb_substr($row_learning['c1'], 0 , 30,'UTF-8'); ?><b>...</b><br>
              2). <?php echo mb_substr($row_learning['c2'], 0 , 30,'UTF-8'); ?><b>...</b><br>
              3). <?php echo mb_substr($row_learning['c3'], 0 , 30,'UTF-8'); ?><b>...</b><br>
              4). <?php echo mb_substr($row_learning['c4'], 0 , 30,'UTF-8'); ?><b>...</b>

              <td>

                <?php if ($row_learning['answer'] == 1): ?>
                  <i class="far fa-check-circle tru"></i> <br>
                  <?php else: ?>
                    <i class="fas fa-times-circle fau"></i> <br>
                  <?php endif ?>

                  <?php if ($row_learning['answer'] == 2): ?>
                    <i class="far fa-check-circle tru"></i> <br>
                    <?php else: ?>
                      <i class="fas fa-times-circle fau"></i> <br>
                    <?php endif ?>

                    <?php if ($row_learning['answer'] == 3): ?>
                      <i class="far fa-check-circle tru"></i> <br>
                      <?php else: ?>
                        <i class="fas fa-times-circle fau"></i> <br>
                      <?php endif ?>

                      <?php if ($row_learning['answer'] == 4): ?>
                        <i class="far fa-check-circle tru"></i> <br>
                        <?php else: ?>
                          <i class="fas fa-times-circle fau"></i> <br>
                        <?php endif ?>



                      </td>
                      <td class="text-center">
                        <?php if ($row_learning['status'] == 0): ?>
                          ใช้งาน

                          <?php else: ?>
                            ยกเลิก
                          <?php endif ?>
                        </td>

                        <td>
                          <a href="index.php?showchoice_s&choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>" class="btn btn-outline-warning my-2 my-sm-0 bu" >แก้ไข</a>

                          <?php if ($row_learning['status'] <> 1 ): ?>

                            <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0 bu" onClick="return confirm('ยืนยันการยกเลิกคำถาม');">ยกเลิก</a>

                            <?php else: ?>

                              <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=0" class="btn btn-outline-secondary my-2 my-sm-0 bu" onClick="return confirm('ยืนยันการใช้งานคำถาม');">ใช้งาน</a>
                            </td>
                          <?php endif ?>
                        </tr>

                        <?php 
                        $i += 1;
                      } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

                    </tbody>
                  </table>
                <?php }else {
                  echo "<h3><br /> ยังไม่มีคำถาม </h3>";
                }

                mysqli_free_result($learning);?>

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

          <?php include 'edit_choice_sub.php'; ?>