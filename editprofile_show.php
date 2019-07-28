<?php session_start();?>
<?php include 'conn.php';  ?>
<?php 

date_default_timezone_set('Asia/Bangkok');
$user_id = $_GET['user_id'];

$check = "SELECT * FROM user WHERE id = '$user_id' ";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<body>
  <?php include 'header.php'; ?>
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
                  <h1 class="text-center"><b>แก้ไขข้อมูล</b></h1>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div class="py-1">
            <div class="container text-center ">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                  <table border="1">

                    <tr>
                      <td>ชื่อผู้ใช้</td>
                      <td><input type="text" class="form-control" readonly  value="<?php echo($num['Username'])?>"></td>
                    </tr>


                    <form class="form-inline" id="c_form-h" action="editprofile_db.php" method="post" >
                      <div class="form-group row">
                        <div class="form-group col-md-3">
                          <label>ชื่อผู้ใช้&nbsp;</label>
                          <input type="text" class="form-control" value="<?php echo($num['Username'])?>">
                        </div>

                        <div class="form-group col-md-3">
                          <label>ชื่อ&nbsp;</label>
                          <input type="text" class="form-control" value="<?php echo($num['Firstname'])?>">
                        </div>

                        <div class="form-group col-md-3">
                          <label>นามสกุล&nbsp;</label>
                          <input type="text" class="form-control" value="<?php echo($num['Lastname'])?>">
                        </div>

                        <div class="form-group col-md-3">
                          <label>อีเมล์&nbsp;</label>
                          <input type="email" class="form-control" value="<?php echo($num['email'])?>">
                        </div>

                        <div class="form-group col-md-3">
                          <label>อีเมล์&nbsp;</label>
                          <input type="email" class="form-control" value="<?php echo($num['email'])?>">
                        </div>

                        <div class="form-group col-md-3">
                          <label>เบอร์โทร&nbsp;</label>
                          <input type="number" class="form-control" value="<?php echo($num['phone'])?>">
                        </div>


                        <input type="hidden" name="id" value="<?php echo($num['ID'])?>">

                        <div class="py-3">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12 text-center">

                                <a class="btn btn-warning text-light mx-1" href="editprofile.php?eu&user_id=<?php echo $_SESSION["UserID"]; ?>">แก้ไข</a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                    </table>
                  </form>

                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>

        </div>
        <!-- new -->
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
</body>
<?php include 'footer.php'; ?>