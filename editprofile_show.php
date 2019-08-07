<?php //session_start();?>
<?php include 'conn.php';  ?>
<?php 

date_default_timezone_set('Asia/Bangkok');
$user_id = $_GET['user_id'];

$check = "SELECT * FROM user WHERE id = '$user_id' ";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<body>
<div class="col-md-1"></div>
        <div class="col-md-10">
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
                  <form >
                    <table border="0">
                     <tbody>
                      <tr>
                        <td>ชื่อ</td>
                        <td>
                          <input type="text" class="form-control" readonly  value="<?php echo($num['Firstname'])?>">
                        </td>

                        <td></td>
                        <td>นามสกุล</td>
                        <td>
                          <input type="text" class="form-control" readonly  value="<?php echo($num['Lastname'])?>">
                        </td>
                      </tr>
                      <tr>
                        <td>อีเมล์</td>
                        <td>
                          <input type="text" class="form-control" readonly  value="<?php echo($num['email'])?>">
                        </td>
                        <td></td>
                        <td>เบอร์โทร</td>
                        <td>
                          <input type="text" class="form-control" readonly  value="<?php echo($num['phone'])?>">
                        </td>
                      </tr>

                      <tr>
                       <td>ชื่อผู้ใช้</td>
                       <td>
                        <input type="text" class="form-control" readonly  value="<?php echo($num['Username'])?>">
                      </td>
                      <td></td>
                      <td>รหัสผ่าน</td>
                      <td>
                        <input type="password" class="form-control" readonly  value="<?php echo($num['Password'])?>">
                      </td>
                    </tr>

                    <tr>
                      <td>รหัสประจำตัวนักเรียน</td>
                      <td>
                        <input type="number" class="form-control" name="stid" readonly  maxlength="10" minlength="10" required  value="<?php echo($num['user_stid'])?>">
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                    <input type="hidden" name="id" value="<?php echo($num['ID'])?>">
                  </tbody>
                  <tfoot>
                    <tr> 
                       <td></td>
                      <td></td>
                       <td> 
                        <a class="btn btn-outline-info" href="editprofile.php?eu&user_id=<?php echo $_SESSION["UserID"]; ?>" >แก้ไข</a>
                       </td>
                     
                    </tr>
                  </tfoot>

                </table>

                <!-- DivTable.com -->
              </form>

            </div>



          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
<div class="col-md-1"></div>
  </div>
  <!-- new -->
