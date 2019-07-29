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
        $ep = isset($_REQUEST['ep']);
        $editc = isset($_REQUEST['editc']);
        $su = isset($_REQUEST['su']);
        $anw = isset($_REQUEST['anw']);
        $anws = isset($_REQUEST['anws']);
        $eu = isset($_REQUEST['eu']);
        $sc = isset($_REQUEST['sc']);
        $sco = isset($_REQUEST['sco']);
        $send = isset($_REQUEST['send']);

        if ($in <> '') {
          include 'index_scoreall.php';
        }elseif ($sh <> '') {
          include 'showchoice.php';
        }elseif ($shs <> '') {
          include 'showchoice_sub.php';
        }elseif ($sp <> '') {
          include 'editprofile_show.php';
        }elseif ($ep <> '') {
          include 'editprofile.php';
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
        }elseif ($sc <> '' or $sco <> '') {
          include 'show_choice_all.php';
        }elseif ($send <> '') {
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

<?php if ($eu <> ''): ?>


  <?php else: ?>
    <style>
      .footer {
       position: fixed;
       bottom: 0;
       width: 100%;
       color: white;
       text-align: center;
     }
   </style>

 <?php endif ?>
 <?php include 'footer_admin.php'; ?>

</body>

</html>