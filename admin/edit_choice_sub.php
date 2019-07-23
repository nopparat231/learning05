

<?php 

if (isset($_GET['id'])) {
//include '../conn.php';

  $id = $_GET['id'];
  $choice_id = $_GET['choice_id'];

  $query_editc = "SELECT * FROM testing where id = $id";
  $editc = mysqli_query($con,$query_editc) or die(mysqli_error());
  $row_editc = mysqli_fetch_assoc($editc);
  $totalRows_editc = mysqli_num_rows($editc);

  $query_cc = "SELECT * FROM choice ";
  $cc = mysqli_query($con,$query_cc) or die(mysqli_error());
  $row_cc = mysqli_fetch_assoc($cc);
  $totalRows_cc = mysqli_num_rows($cc);


  ?>
  <script type="text/javascript">

    //onload show modal script ชุดนี้โหลดมาตรงๆ ไม่มีหน่วงเวลานะ
    $(document).ready(function(){
      $("#edcModal").modal('show');
    });
    

  </script>


<?php } ?>

<body>
  <div class="modal fade" style="" id="edcModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">แก้ไขหมวดหมู่</h5>
          <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
        </div>
        <div class="modal-body">

          <form action="edit_choice_sub_db.php" method="post">

            <div class="form-group row"> 
              <label for="inputmailh" class="col-2 col-form-label">หมวด</label>
              <div class="col-10">
               <div class="form-group">

                <select class="form-control" id="exampleFormControlSelect1" name="choice_id" required="required">


                  <?php do { ?>
                    <?php if ($row_cc['choice_id'] == $row_editc['choice_id']) { ?>
                      <option selected="selected" value="<?php echo $row_cc['choice_id']; ?>">
                        <?php echo $row_cc['choice_name']; ?></option>
                      <?php }else{ ?>
                       <option  value="<?php echo $row_cc['choice_id']; ?>">
                        <?php echo $row_cc['choice_name']; ?></option>
                      <?php } ?>

                    <?php } while ($row_cc = mysqli_fetch_assoc($cc)); ?>


                  </select>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>" />

            <div class="form-group row"> 
             <label for="inputmailh" class="col-2 col-form-label">คำถาม</label>
             <div class="col-10">
              <input type="text" class="form-control" id="form29" required placeholder="กรุณากรอกคำถาม" name="question" value="<?php echo $row_editc['question'] ?>">
            </div>
          </div>

          <div class="form-group row"> 
            <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 1)</label>
            <div class="col-10">
              <input type="text" class="form-control" id="form29" required placeholder="กรุณากรอกข้อที่ 1" name="c1" value="<?php echo $row_editc['c1'] ?>">
            </div>
          </div>

          <div class="form-group row"> 
           <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 2)</label>
           <div class="col-10">
            <input type="text" class="form-control" id="form29" required placeholder="กรุณากรอกข้อที่ 2" name="c2" value="<?php echo $row_editc['c2'] ?>">
          </div>
        </div>

        <div class="form-group row"> 
         <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 3)</label>
         <div class="col-10">
          <input type="text" class="form-control" id="form29" required placeholder="กรุณากรอกข้อที่ 3" name="c3" value="<?php echo $row_editc['c3'] ?>">
        </div>
      </div>

      <div class="form-group row"> 
       <label for="inputmailh" class="col-2 col-form-label">ข้อที่ 4)</label>
       <div class="col-10">
        <input type="text" class="form-control" id="form29" required placeholder="กรุณากรอกข้อที่ 4" name="c4" value="<?php echo $row_editc['c4'] ?>">
      </div>
    </div>

    <div class="form-group row"> 
     <label for="inputmailh" class="col-2 col-form-label">คำตอบ</label>
     <div class="col-10">
      <input type="number" class="form-control" id="input-num" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "1" minlength="1" onkeyup="num();" name="answer"  required="required" placeholder="คำตอบเป็นตัวเลข เช่น 1 , 2 , 3 , 4" value="<?php echo $row_editc['answer'] ?>" /> 
    </div>
  </div>


</div>


<div class="modal-footer"> 
  <button type="submit" class="btn btn-outline-success">แก้ไข</button> 
  <a href="#" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close" >ยกเลิก</a>
</form>
</div>

</div>
</div>
</div>
</body>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function num() {
    var element = document.getElementById('input-num');
    element.value = element.value.replace(/[^1-4]+/, '');
  };
</script>
