<?php include('phpSections/server.php') ?>

<!DOCTYPE html>

<html>


  <?php if(isset($_SESSION['name'])){ ?>
        <div class="cornerDiv">
          <div style="border-bottom: 1px solid blue">
          <p>Welcome, <?php echo $_SESSION['name']?></p>
          </div>
          <div style="margin-top:5px; padding-left: 25px;">
            <a href="checkout.php" class="checkout">
            <i class="fas fa-shopping-cart"></i>
                 Checkout-<span style="border-left=1px solid blue;border-right=1px solid blue ">0</span>
            </a>
          </div>
        </div>
  <?php } ?>

  <?php include('htmlSections/htmlHead.php'); ?>

  <body style="background-color:aqua; font-family: '8bit';">

  <?php include('htmlSections/navbar.php'); ?>

  <div class="introduction">
      <p><b>Well, well, well... Fasten your seatbelts because we are going on a trip through history! It all started on a warm summer evening in ancient greece... oh... wait.. just a second... let me check... oh... oops... wrong script... Well, apparently our history isn't as rich as we thought! In fact, we just started existing out of thin air just a few weeks ago. Apparently some student from riteh needed a theme for a project, so here we are... the more you know... here is a hq picture of cat since our history is so short</b></p>
  </div>

  <img src="pictures/CAT.png" style="margin-left: 500px">

   <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>