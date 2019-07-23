

<body>

  <form action="add_choice_db.php" method="post">
    <div class="modal fade" style="" id="addchoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">เพิ่มหมวดหมู่</h5>
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>
          <div class="modal-body">
            <form action="add_choice_db.php" id="c_form-h" class=""  method="post">

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">ชื่อหมวดหมู่</label>
                <div class="col-9">
                  <input type="text" class="form-control" required="required" id="choice_name" name="choice_name" placeholder="กรุณากรอกหมวดหมู่"> 
                </div>
              </div>

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">URL Youtube</label>
                <div class="col-9">
                  <input type="text" class="form-control"  required="required"  id="video" name="video" placeholder="กรุณากรอก URL"> 
                </div>
              </div>

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">รายละเอียด</label>
                <div class="col-9">
                  <input type="text" class="form-control"  required="required"  id="choice_detail" name="choice_detail" placeholder="กรุณากรอก URL" > 
                </div>
              </div>

            </form>
          </div>
          <div class="modal-footer"> 
            <button type="submit" class="btn btn-primary">ยืนยัน</button> 
            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
          </div>
        </div>
      </div>
    </div>
  </form>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
