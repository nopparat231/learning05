
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar6"> 
    <a class="navbar-brand text-primary d-none d-md-block" href="#">
     
      <img src="./img/img237.jpg" alt="" width="10%"> <b>  DIGITAL MARKETING COMMUNICATION</b>
    </a>
    <ul class="navbar-nav mx-auto"></ul>
 
      <ul class="navbar-nav ">
          <li class="nav-item "> 
            <?php if (isset($_SESSION["Userlevel"]) == "M") { 

              echo "<b class='fa text-primary nav-link' >".$_SESSION["User"]."</b>";
            }else{ }?>

          </li>
          <li class="nav-item">  
            <?php

            if (isset($_SESSION["Userlevel"]) == "M") {
              //echo "<a class='fa text-danger nav-link' href='logout.php'>ออกจากระบบ</a>";

            }else{?>

              <form class="form-inline" action="login_db.php"> 
                <div class="form-group">
                <input class="form-control mr-sm-2" type="text" placeholder="ชื่อผู้ใช้" id="Username" name="Username" required="required" autocomplete="off">
                <input class="form-control mr-sm-2" type="Password" placeholder="รหัสผ่าน" id="Password"  name="Password" required="required" autocomplete="off"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button>
                <a class='nav-link text-lite' href='#' data-toggle='modal' data-target='#exampleModal'>ลืมรหัสผ่าน</a>
                <!-- <a href="resetpassword.php" type="submit" class="form-control mr-sm-2">ลืมรหัสผ่าน</a> -->
              </div>
              </form>


              <?php
            }
            ?> 

          </li>
         
        </ul>
  </div>
</div>
</nav>
 <?php include 'resetpassword.php'; ?>