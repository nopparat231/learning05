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

<style type="text/css">
  .card:hover {
    transform: scale(1.10) translateZ(0);

  }

  .myButton {
    -moz-box-shadow: 0px 10px 14px -7px #276873;
    -webkit-box-shadow: 0px 10px 14px -7px #276873;
    box-shadow: 0px 10px 14px -7px #276873;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
    background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
    background-color:#599bb3;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    border-radius:8px;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:20px;
    font-weight:bold;
    padding:13px 32px;
    text-decoration:none;
    text-shadow:0px 1px 0px #3d768a;
  }
  .myButton:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
    background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
    background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
    background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
    background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
    background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
    background-color:#408c99;
  }
  .myButton:active {
    position:relative;
    top:1px;
  }


</style>
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
      }elseif ($sc <> '' or $sco <> '') { ?>


        <?php include 'edit_choice.php'; ?>
        <?php include 'add_choice.php'; ?>
        <div class="row" align="center">
          <div class="col-md-12">

            <br>
            <a href="index.php.php" class="myButton" data-toggle='modal' data-target='#addchoiceModal'>+</a>
            <br><br>
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