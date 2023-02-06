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
      <p><b>Howdy partner!</b></p>
      <br/>
      <p>Thanks for checking out our brand new - super cool - totally legit - extra sassy - best in town restaurant! Use our magnificent navbar at the top, or view some of the more important things down below!</p>
  </div>

  <div class="introduction">
       <p>One calm and starry night, you feel your stomach grumbling. Your instincts kick in, and your hunger and thirst overcomes your body. Then you remember! There is a new fast food restaurant nearby, but you don't know if they are worth it? Well no problemo amigo! Just checkout our "about us" section where you can find everything.... well... about us... you want to see some reviews? No problem whatsoever. Perhaps you are astonished by our facility and you consider working here? No problem aswell. All of that you can find out at that same "about us" section! Shortcuts down below!</p>
       <br/>
       <p class="introLinks">
          <a href="history.php">Our history</a>
          <a href="reviews.php">Reviews</a>
          <a href="employment.php">Employment</a>
       <p>
  </div>

  <div class="introduction">
      <p><b>Check out some of our most popular items down below!</b></p>
      <br/>
      <div class="slideshow-container">
        <div class="mySlides">
          <img src="pictures/slideshowitem1.png" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="pictures/slideshowitem2.png" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="pictures/slideshowitem3.png" style="width:100%">
        </div>
        <div class="mySlides">
          <img src="pictures/slideshowitem4.png" style="width:100%">
        </div>
      </div>
      <br/>
      <div class="introLinks">
        <a href="menu.php">Check out our menu!</a>
      </div>
  </div>

  <script src="jsSections/slideshow.js"></script>
  <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>