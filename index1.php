
<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}
?>
<style type="text/css">
  .card:hover {
    transform: scale(1.10) translateZ(0);

  }

</style>
<?php include 'check.php'; ?>
<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<div class="container">
  <div class="row" align="center">
    <div class="col-md-12">


      <?php include 'carousel.php'; ?>
      <?php include 'navbar.php'; ?>
     

      <?php //include 'menu.php'; ?>
      <?php include 'model.php'; ?>

      <?php
      $regis = isset($_GET['register']);
      $learning = isset($_GET['learning']);

      if ($regis <> ''): ?>
       <div class="col-md-9">
        <?php include 'register.php'; ?>
      </div>
      <?php elseif ($learning <> ''): ?>
        <div class="col-md-9">
          <?php include 'index2.php'; ?>
        </div>
        <?php else: ?>

          <div class="row" align="center">
            <div class="col-md-12">


              <!-- Card Deck -->
              <div class="card-columns">

                <?php include 'index2.php'; ?>



              </div> <!-- End card -->


              <br>
              <br>
            </div>
          </div>

        <?php endif ?>


      </div>
    </div>
  </div>
  <?php
  if ($learning <> ''): ?>
    <!-- <style>
      .footer {
       position: fixed;
       bottom: 0;
       width: 100%;
       color: white;
       text-align: center;
     }
   </style> -->


 <?php endif ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

 <?php include 'footer.php'; ?>



 </html>