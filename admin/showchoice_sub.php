

<style type="text/css" media="screen">
  .tru{
    color: green;
  }
  .fau{
    color: red;
  }
  .bu{
    width: 32px;
  }
</style>

<?php 
$choice_id = $_GET['choice_id'];


$query_learning = "SELECT * FROM testing WHERE choice_id = '$choice_id' order by id desc " ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>

<div class="py-2">
<div class="col-md-12">

  <P style="text-align: center;">
    <a href="showchoice_sub.php" class="myButton"  data-toggle='modal' data-target='#addchoicesubModal'>+</a></P>
    <div class="table-responsive">

      <?php include 'add_choice_sub.php'; ?>
      <?php include 'edit_choice_sub.php'; ?>

      <table class="table table-hover" bgcolor="white" border="0">
       <?php if ($totalRows_learning > 0) {?>

        <thead class="thead-dark">
          <tr class="text-center">


            <th scope="col" width="50%">คำถาม</th>

            <th scope="col" class="text-left" width="5%">เฉลย</th>
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

              <td>
                <?php echo "<h5>" .$i." ). " ?>
                <?php echo $row_learning['question'] ."</h5>"; ?>


                <table class="table table-borderless">
                  <tbody>

                    <tr >
                      <td width="25%">1). <?php echo mb_substr($row_learning['c1'], 0 , 45,'UTF-8'); ?></td>
                      <td width="25%">2). <?php echo mb_substr($row_learning['c2'], 0 , 45,'UTF-8'); ?></td>
                    </tr>

                    <tr >
                      <td width="25%">3). <?php echo mb_substr($row_learning['c3'], 0 , 45,'UTF-8'); ?></td>
                      <td width="25%">4). <?php echo mb_substr($row_learning['c4'], 0 , 45,'UTF-8'); ?></td>
                    </tr>

                  </tbody>
                </table>

              </td>



              <td><br><br><br>
                <?php echo "ข้อ. " . $row_learning['answer']; ?>
              </td>
              <td class="text-center">
                <?php if ($row_learning['status'] == 0): ?>
                  <br><br><br>
                  ใช้งาน

                  <?php else: ?>
                    <br><br><br>
                    <font color="red">ยกเลิก</font>
                  <?php endif ?>
                </td>

                <td><br><br><br>

                  <a href="index.php?showchoice_s&choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>" class="btn btn-outline-warning my-2 my-sm-0 bu"  ><i class="fa fa-pencil" aria-hidden="true"></i></a>

                  <?php if ($row_learning['status'] <> 1 ): ?>

                    <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0 bu" onClick="return confirm('ยืนยันการยกเลิกคำถาม');"><i class="fa fa-ban" aria-hidden="true"></i></a>

                    <?php else: ?>


                      <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=0" class="btn btn-outline-secondary my-2 my-sm-0 bu" onClick="return confirm('ยืนยันการใช้งานคำถาม');"><i class="fa fa-repeat" aria-hidden="true"></i></a>
                    </td>
                  <?php endif ?>
                </tr>

                <?php 
                $i++;
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
</div>
  <?php include 'edit_choice_sub.php'; ?>