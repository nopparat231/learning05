
<?php //include '../conn.php'; ?>

<?php 

$choice_id = $_GET["choice_id"];

$query_editc = "SELECT * FROM choice where choice_id = $choice_id";
$editc = mysqli_query($con,$query_editc) or die(mysqli_error());
$row_editc = mysqli_fetch_assoc($editc);
$totalRows_editc = mysqli_num_rows($editc);

?>


<body>

  <form action="edit_choice_db.php"  id="upload_form" enctype="multipart/form-data" method="post">
    <div class="modal fade" style="" id="editchoiceModal" tabindex="-1" role="dialog" aria-labelledby="editchoiceModal" aria-hidden="true">
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
              <label for="inputmailh" class="col-3 col-form-label">เลือกไฟล์ Video</label>
              <div class="col-9">


                <?php //include 'up.php'; ?>
                  <input type="file" name="file1" id="file1" value="../img/<?php echo $row_editc['video']; ?>">

                 
           

              </div>
            </div>

            <div class="form-group row"> 
              <label for="inputmailh" class="col-3 col-form-label">รายละเอียด</label>
              <div class="col-9">
                <input type="text" class="form-control"  required="required"  id="videodetail" name="choice_detail" placeholder="กรุณากรอก รายละเอียด"  value="<?php echo $row_editc['choice_detail'] ?>"> 
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer"> 
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
          <a href="index.php?sc"  type="button" class="btn btn-danger" >ยกเลิก</a>

        </div>
      </div>
    </div>
  </div>
</form>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('#editchoiceModal').modal('show'); 
</script>