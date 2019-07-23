
<?php include '../conn.php'; ?>
  <script type="text/javascript">

    //onload show modal script ชุดนี้โหลดมาตรงๆ ไม่มีหน่วงเวลานะ
    $(document).ready(function(){
      $("#editchoiceModal").modal('show');
    });
    

  </script>

<?php 

if (isset($_GET['choice_id'])) {

  $choice_id = $_GET['choice_id'];

  $query_editc = "SELECT * FROM choice where choice_id = $choice_id";
  $editc = mysqli_query($con,$query_editc) or die(mysqli_error());
  $row_editc = mysqli_fetch_assoc($editc);
  $totalRows_editc = mysqli_num_rows($editc);

}
?>


<body>

  <form action="edit_choice_db.php" method="post">
    <div class="modal fade" style="" id="editchoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">แก้ไขหมวดหมู่</h5>
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>
          <div class="modal-body">
            <form action="add_choice_db.php" id="c_form-h" class=""  method="post">

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">ชื่อหมวดหมู่</label>
                <div class="col-9">
                 <input type="text" class="form-control" required="required" id="choice_name" name="choice_name" placeholder="กรุณากรอกหมวดหมู่"  value="<?php echo $row_editc['choice_name'] ?>"> 
                 <input type="hidden" name="choice_id" value="<?php echo $choice_id; ?>">
                </div>
              </div>

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">URL Youtube</label>
                <div class="col-9">
                  <input type="text" class="form-control"  required="required"  id="video" name="video" placeholder="กรุณากรอก URL"  value="<?php echo $row_editc['video'] ?>"> 
                </div>
              </div>

              <div class="form-group row"> 
                <label for="inputmailh" class="col-3 col-form-label">รายละเอียด</label>
                <div class="col-9">
                  <input type="text" class="form-control"  required="required"  id="video" name="choice_detail" placeholder="กรุณากรอก URL"  value="<?php echo $row_editc['choice_detail'] ?>"> 
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
