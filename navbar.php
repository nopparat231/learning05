 <?php include 'model.php'; ?>


 <nav class="navbar navbar-expand-md navbar-light" style="background: #FDB4BF;">
  <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar6"> 
    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">

     <b><font color="blue">หน้าหลัก</font></b>
   </a>

   <?php if (isset($_SESSION["Userlevel"]) == "M") { ?>
    <?php $user_id=$_SESSION['UserID']; ?>
    <ul class="navbar-nav">

        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข้อมูลผู้ใช้</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="score.php?user_id=<?php echo $user_id; ?>">คะแนนผู้ใช้</a>
            <a class="dropdown-item" href="editprofile.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูลผู้ใช้</a>
           

          </div>
        </li>
        <a class="nav-link" href="score_all.php">คะแนนผู้ใช้ทั้งหมด</a> </li>
      </ul>

    <?php }else{ ?>

     <ul class="navbar-nav mx-auto">
      <li class="nav-item"> 
        <a class="nav-link" href="#"></a> </li>
        <li class="nav-item dropdown"> 

        </li>
      </ul>

    <?php }?>

    <ul class="navbar-nav mx-auto"></ul>
    <ul class="navbar-nav">

      <?php if(isset($_SESSION["Userlevel"]) <> "M"): ?>
        <li class="nav-item"> <a class="nav-link text-primary" href="?register" >สมัครสมาชิก</a> </li>

        <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#login" href="" >เข้าสู่ระบบ</a> </li>
      <?php endif ?>

      <?php if(isset($_SESSION["Userlevel"]) == "M"): ?>
        <li class="nav-item">

          <?php echo "ยินดีต้อนรับคุณ "; ?>

        </li>

      <?php endif ?>

    </ul>

    <ul class="navbar-nav ">
      <li class="nav-item "> 
        <?php if (isset($_SESSION["Userlevel"]) == "M") { 

          echo "<b class='fa text-primary nav-link' >".$_SESSION["User"]."</b>";
        }else{ }?>

      </li>
      <li class="nav-item">  
        <?php

        if (isset($_SESSION["Userlevel"]) == "M") {
          echo "<a class='fa text-danger nav-link' href='logout.php'>ออกจากระบบ</a>";

        }else{   ?>


<!--               <form class="form-inline" action="login_db.php"> 
                <div class="form-group">
                <input class="form-control mr-sm-2" type="text" placeholder="ชื่อผู้ใช้" id="Username" name="Username" required="required" autocomplete="off">
                <input class="form-control mr-sm-2" type="Password" placeholder="รหัสผ่าน" id="Password"  name="Password" required="required" autocomplete="off"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button>
                <a class='nav-link text-lite' href='#' data-toggle='modal' data-target='#exampleModal'>ลืมรหัสผ่าน</a>
               
              </div>
              </form>
            -->

            <?php
          }
          ?> 

        </li>

      </ul>
    </div>
  </div>
</nav>
<?php include 'resetpassword.php'; ?>