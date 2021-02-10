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
      <p><b>well, well, well!</b></p>
      <br/>
      <p>Look who it is. You've finally came to your sensen and you decided to join the best crew... pause... IN THE WORLD! Well come on right in, sen as a email and well gladly ring you up! See ya!</p>
  </div>

<div class="employment">
  <form action="mailto:mcriteh@managment.net" method="post" enctype="text/plain">
    Name:<br>
    <input type="text" name="name"><br>
    contact E-mail:<br>
    <input type="text" name="mail"><br>
    Comment:<br>
    <textarea id="yourmessage" name="yourmessage" rows="4" cols="50">
    </textarea><br><br>
    <input type="submit" value="Send">
    <input type="reset" value="Reset">
  </form>
</div>

   <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>