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

  <?php if(isset($_SESSION['name'])){ ?>
  <?php }else{?>
      <div class="introduction">
        <p>You have to be logged in to order!</p>
      </div>
  <?php } ?>

  <div class="menu">
    <img src="pictures/1.hamburger.webp" width="200px">
    <div class="productNameAndDescription">
      <h1>HTML Burger</h1>
      <p>Not much to say about this one. A simple, yet elegant tool for all your cravings. It has been used to fulfill the needs of many generations, and surely that functionality won't stop today.</br>(bun, beef patty, lettuce, tomato, dank sauce)</p>
    </div>
    <div class="addtocart">
      <h1>20,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
    </div>
  </div>

  <div class="menu">
    <img src="pictures/2.hamburger2.png" width="200px" height="75%">
    <div class="productNameAndDescription">
      <h1>JS Burger</h1>
      <p>Shares the same characteristics as the one above, only twice as fun. Double the possibilities, double the smile on your face. Also, added cheese for extra dankness!</br>(bun, beef patty x2, lettuce, tomato, cheese, dank sauce)</p>
    </div>
    <div class="addtocart">
      <h1>30,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
    </div>
  </div>

  <div class="menu">
    <img src="pictures/3.chickenburger.png" width="200px" height="75%">
    <div class="productNameAndDescription">
      <h1>Lorem Ipsum Burger</h1>
      <p>I have no idea what this is supposed to be. Some zombie chicken probs. Apparently, the following text explains it. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</br>(???)</p>
    </div>
    <div class="addtocart">
      <h1>25,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
      </div>
  </div>

  <div class="menu">
    <img src="pictures/4.chickennuggets.png" width="200px" style="margin-right:2px">
    <div class="productNameAndDescription">
      <h1>Not very chicken notmcnuggets</h1>
      <p>Same as the above. Only God knows what is in those things. Oh well, they taste good, plus you get 2 free dank sauces!</br>(???? + 2 dank sauces)</p>
    </div>
    <div class="addtocart">
      <h1>25,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
    </div>
  </div>

  <div class="menu">
    <img src="pictures/5.freshfries.png" width="150px">
    <div class="productNameAndDescription">
      <h1>Fresh fries</h1>
      <p>Some noob apparently copyrighted "French fries" so we are forced to use this name. Oh well, pretty catchy nonetheless!</br>(As organic as they get... SIKE!)</p>
    </div>
    <div class="addtocart">
      <h1>10,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
    </div>
  </div>

  <div class="menu">
    <img src="pictures/6.sodacans.png" width="200px" height="75%">
    <div class="productNameAndDescription">
      <h1>Soda 0,5l</h1>
      <p>I'd name all the types of soda we have, but my patience with this menu is slowly running thin. You'd probably be better of buying some from your local supermarket, lazy!</br></p>
    </div>
    <div class="addtocart">
      <h1>10,00kn</h1>
      <?php if(isset($_SESSION['name'])){ ?>
        <button type="button" class="jsbutton">Add to cart!</button>
      <?php } ?>
    </div>
  </div>

<script src="jsSections/checkout.js"></script>

<?php include('htmlSections/htmlFoot.php') ?>

</html>