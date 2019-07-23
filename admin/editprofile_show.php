
<?php 
date_default_timezone_set('Asia/Bangkok');
$user_id = $_GET['user_id'];

$check = "SELECT * FROM user WHERE id = '$user_id' ";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<body>

  <div class="col-md-9">
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
    <div class="container w-46">
      <div class="row">
        <div class="text-left col-md-12" style="">
          <form class="" id="c_form-h" action="editprofile_db.php" method="post" >
            <div class="form-group row">
              <label class="col-2">ชื่อผู้ใช้</label>
              <div class="col-10">
                <div class="input-group">
                  <?php echo($num['Username'])?></div>
                </div>
              </div>

              <div class="form-group row"><label class="col-2">ชื่อ</label>
                <div class="col-10">
                  <div class="input-group">
                    <?php echo($num['Firstname'])?></div>
                  </div>
                </div>
                <div class="form-group row"><label class="col-2">นามสกุล</label>
                  <div class="col-10">
                    <div class="input-group">
                      <?php echo($num['Lastname'])?></div>
                    </div>
                  </div>
                  <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
                    <div class="col-10">
                      <?php echo($num['email'])?> </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-2">เบอร์โทร<br></label>
                      <div class="col-10">
                        <div class="input-group">
                          <?php echo($num['phone'])?></div>
                        </div>
                      </div>
                       <div class="form-group row">
                      <label class="col-2">วันหมดอายุ<br></label>
                      <div class="col-10">
                        <div class="input-group">
                          
                           <?php $da = date('d-m-Y',strtotime($num['user_date'])); ?>
                          <?php echo $da; ?>
                            
                            
                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?php echo($num['ID'])?>">

                      <div class="py-3">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12 text-center">

                              <a class="btn btn-warning text-light mx-1" href="index.php?ep&user_id=<?php echo $_SESSION["UserID"]; ?>">แก้ไข</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>

