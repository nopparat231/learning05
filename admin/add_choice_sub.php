
<?php 
$query_cc = "SELECT * FROM choice ";
$cc = mysqli_query($con,$query_cc) or die(mysqli_error());
$row_cc = mysqli_fetch_assoc($cc);
$totalRows_cc = mysqli_num_rows($cc);

?>
<body>

  <form action="add_choice_sub_db.php" method="post">
    <div class="modal fade" style="" id="addchoicesubModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">เพิ่มคำถาม</h5>
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>
          <div class="modal-body">
            <form id="c_form-h" class="">

             <div class="form-group row"> 
              <label for="inputmailh" class="col-2 col-form-label">หมวด</label>
              <div class="col-10">
               <div class="form-group">

                <select class="form-control" id="exampleFormControlSelect1" name="choice_id" required="required">

                  <?php do { ?>
                    
                  <option  value="<?php echo $row_cc['choice_id']; ?>"><?php echo $row_cc['choice_name']; ?></option>
                      
                      
                    <?php } while ($row_cc = mysqli_fetch_assoc($cc)); ?>

                  </select>
                </div>
              </div>
            </div>

            <div class="form-group row"> 
              <label for="inputmailh" class="col-2 col-form-label">คำถาม</label>
              <div class="col-10">
                <input type="text" class="form-control" id="question" name="question" required="required" placeholder="กรุณากรอกคำถาม"> </div>
              </div>

              <div class="form-group row"> 
                <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 1</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="c1" name="c1"  required="required" placeholder="กรอกข้อที่ 1"> </div>
                </div>

                <div class="form-group row"> 
                  <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 2</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="c2" name="c2"  required="required" placeholder="กรอกข้อที่ 2"> </div>
                  </div>

                  <div class="form-group row"> 
                    <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 3</label>
                    <div class="col-10">
                      <input type="text" class="form-control" id="c3" name="c3"  required="required" placeholder="กรอกข้อที่ 3"> </div>
                    </div>

                    <div class="form-group row"> 
                      <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 4</label>
                      <div class="col-10">
                        <input type="text" class="form-control" id="c4" name="c4"  required="required" placeholder="กรอกข้อที่ 4"> </div>
                      </div>

                      <div class="form-group row"> 
                        <label for="inputmailh" class="col-2 col-form-label">คำตอบ</label>
                        <div class="col-10">
                          <input type="number" class="form-control" id="input-num" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "1" minlength="1" onkeyup="num();" name="answer"  required="required" placeholder="คำตอบเป็นตัวเลข เช่น 1 , 2 , 3 , 4" /> </div>
                        </div>


                      </div>
                      <div class="modal-footer"> 
                        <button type="submit" class="btn btn-primary">ยืนยัน</button> 
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                      </div>

                    </form>

                  </div>
                </div>
              </div>
            </form>


          </body>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

          <script type="text/javascript">

            function num() {
              var element = document.getElementById('input-num');
              element.value = element.value.replace(/[^1-4]+/, '');
            };
          </script>