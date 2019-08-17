<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}


?>
<?php include '../check.php'; ?>
<!DOCTYPE html>
<html>
<?php include '../conn.php'; ?>
<?php include 'header.php'; ?>

<link rel=stylesheet href="../st.css">

<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

       <?php include 'carousel.php'; ?>
       <?php include 'navbar.php'; ?>

       <?php include 'datatables.php'; ?>

       <body>

        <?php 

        $in = isset($_REQUEST['in']);
        $sh = isset($_REQUEST['showchoice']);
        $shs = isset($_REQUEST['showchoice_s']);
        $sp = isset($_REQUEST['sp']);
        $eus = isset($_REQUEST['eus']);
        $editc = isset($_REQUEST['editc']);
        $su = isset($_REQUEST['su']);
        $anw = isset($_REQUEST['anw']);
        $anws = isset($_REQUEST['anws']);
        $eu = isset($_REQUEST['eu']);
        $ec = isset($_REQUEST['ec']);
        $sc = isset($_REQUEST['sc']);
        $sco = isset($_REQUEST['sco']);
        $send = isset($_REQUEST['send']);

        if ($in <> '') {
          include 'index_scoreall.php';
        }elseif ($sh <> '') {
          include 'showchoice.php';
        }elseif ($shs <> '') {
          include 'showchoice_sub.php'; ?>

      <?php  }elseif ($sp <> '') {
          include 'editprofile_show.php';
        }elseif ($editc <> '') {
         include 'show_choice_all.php';
       }elseif ($su <> '') { 
        include 'show_user.php';
      }elseif ($anw <> '') {
        include 'show_user_anw.php';
      }elseif ($anws <> '') {
        include 'show_user_anwshow.php';
      }elseif ($eu <> '') {
        include 'edit_user.php';
      }elseif ($ec <> '') {
        include 'edit_choice.php';
        echo "<br><br><br><br><br><br><br><br>";
      }elseif ($sc <> '' or $sco <> '') { ?>


        <?php //include 'edit_choice.php'; ?>
        <?php include 'add_choice.php'; ?>
        <div id="shoeeditchaioce">          
        </div>
        <div class="row" align="center">
          <div class="col-md-12">
            <!-- <button id="editch">test</button> -->
            <div class="py-2">
              <a href="index.php.php" class="myButton" data-toggle='modal' data-target='#addchoiceModal'>+</a>
            </div><br>
            <!-- Card Deck -->
            <div class="card-columns">

              <?php include 'show_choice_card.php'; ?>



            </div> <!-- End card -->


            <br>
            <br>
          </div>
        </div>

        <!-- include 'show_choice_all.php'; -->
      <?php   }elseif ($send <> '') {
        include 'send_mail.php';
      }else{ ?>


        <div class="row">

          <div class="col-md-12" align="center">
            <?php include 'index_scoreall.php'; ?>
            <br>
            <br>
          </div>


        </div>



        <?php
      }

      ?>

    </div>
  </div>
</div>
</div>

<br><br><br>
 <?php include 'footer_admin.php'; 

//เช็คแก้ไขคำถาม
$id = '';
if (isset($_GET['id'])){
$id = $_GET['id'];



}

if ($id <> '') {

 ?>

  <script type="text/javascript">

    //onload show modal script ชุดนี้โหลดมาตรงๆ ไม่มีหน่วงเวลานะ
    $(document).ready(function(){
      $("#edcModal").modal('show');
    });
    

  </script>

<?php } ?>


<?php if ($eus <> ''): ?>

<?php if (isset($_GET['user_id'])){ 
include 'editprofile.php';
?>

  <script type="text/javascript">

    //onload show modal script ชุดนี้โหลดมาตรงๆ ไม่มีหน่วงเวลานะ
    $(document).ready(function(){
      $("#EditUseModal").modal('show');
    });
    

  </script>

<?php } ?>

 <?php endif ?>

</body>

</html>