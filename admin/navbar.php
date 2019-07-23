
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar6"> 
    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">
      <img src="../img/13.png" width="50">
      <b> COMPUTER ATC</b>
    </a>
    <ul class="navbar-nav mx-auto"></ul>
    <ul class="navbar-nav">

     
      <?php if(isset($_SESSION["Userlevel"]) == "A"): ?>
        <li class="nav-item">
          
            <?php echo "ยินดีต้อนรับคุณ " . $_SESSION["User"]; ?>
         
        </li>
       
      <?php endif ?>

    </ul>
  </div>
</div>
</nav>