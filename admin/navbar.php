 <?php include '../model.php'; ?>


 <nav class="navbar navbar-expand-md navbar-light" style="background: #FDB4BF;">
  <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar6"> 
    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">

     <b><font color="blue">หน้าหลัก</font></b>
   </a>

   <?php if (isset($_SESSION["Userlevel"]) == "A") { ?>
    <?php $user_id=$_SESSION['UserID']; ?>
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ข้อมูลผู้ใช้งาน
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูล</a>
         <a class="dropdown-item" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูล</a>
         <a class="dropdown-item" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูล</a>
       </div>

     </li>

     <li class="nav-item"> <a class="nav-link" href="scoreall.php">คะแนนผู้ใช้งานทั้งหมด</a> </li>

   </ul>
 <?php }else{ ?>

  <ul class="navbar-nav mx-auto">
    <li class="nav-item"> 
      <a class="nav-link" href="#">test</a> </li>
      <li class="nav-item dropdown"> 
        ttt
      </li>
    </ul>

  <?php }?>
  <style type="text/css">
    .ml-auto {
      left: auto !important;
      right: 0px;
    }
  </style>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">  
      <?php

      if (isset($_SESSION["Userlevel"]) == "A") {
        echo "<a class='fa text-danger nav-link' href='logout.php'>ออกจากระบบ</a>";

      }
      ?> 

    </li>
  </ul>


</div>
</div>
</nav>
<?php// include '../resetpassword.php'; ?>