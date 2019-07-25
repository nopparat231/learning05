<!DOCTYPE html>
<html>


<body>

  <div class="modal fade"  id="login">
    <div class="modal-dialog" role="document">
      <form action="login_db.php" method="post" > 
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title">เข้าสู่ระบบ</h5> 
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>

          <div class="modal-body">

            <div class="form-group row"> 
              <label for="Username" class="col-2 col-form-label">Username</label>
              <div class="col-10">
                <input type="text" class="form-control" id="Username" required placeholder="Username" name="Username"> </div>
              </div>
              <div class="form-group row"> 
                <label for="inputpasswordh" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                  <input type="password" class="form-control" id="inputpasswordh" placeholder="Password" name="Password"> </div>
                </div>
                <a href="" class="pull-right" data-toggle="modal" data-dismiss="modal" data-target="#resetpass" >ลืมรหัสผ่าน</a>
              </div>
              <div class="modal-footer">
               <button type="submit" class="btn btn-primary" style="background-color: #581845">เข้าสู่ระบบ</button>
               <button type="submit" class="btn btn-secondary" data-dismiss="modal">ปิด</button> 
             </div>
           </div>
         </form>
       </div>
     </div>

     <div class="modal" id="resetpass">
      <div class="modal-dialog" role="document">
        <form id="c_form-h" method="post" action="resetpassword_db.php">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">ลืมรหัสผ่าน</h5> 
            <button type="button" class="close" data-dismiss="modal" style="background-color: #581845"> <span>×</span> 
            </button>
          </div>
          <div class="modal-body">
            
              <div class="form-group row"> 
                <label for="inputmailh" class="col-2 col-form-label">E-mail</label>
                <div class="col-10">
                  <input type="email" class="form-control" id="inputmailh" placeholder="mail@example.com" name="email"> 
                </div>
              </div>

            
          </div>
          <div class="modal-footer"> 
            <button type="submit" class="btn text-light " style="background-color: #581845">ลืมรหัสผ่าน</button> 
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">ปิด</button> 
          </div>
        </div>
</form>
      </div>
    </div>

  </body>

  </html>