   <div class="col-md-3">
   	<ul class="list-group">
   		
   		<?php if(isset($_SESSION["Userlevel"]) == "A"): ?>

         <a href="index.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> หน้าหลัก </a>

         <a href="index.php?su" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">ผู้ดูแลระบบ </a>

         <a href="index.php?sc" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">จัดการแบบทดสอบ </a>

         <a href="../index1.php?learning" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> บทเรียน </a>

         <a href="index.php?anw" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">จัดการสมาชิก </a>

         <a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" data-toggle="dropdown"> ข้อมูล </a>

         <ul class="dropdown-menu">
          <li>
           <a href="index.php?sp&user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลผู้ใช้ </a>
         </li>
         <li>
           <a href="index.php?pw&user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a>
         </li>


       </ul>

       <a href="../score.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะแนน </a>

       <a href="index.php?in" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะแนนทั้งหมด </a>

       
       
       <a href="index.php?send" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> แจ้งเตือนสมาชิก</a>



       <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ออกจากระบบ </a>
     <?php endif ?>
   </ul>
 </div>

</li>