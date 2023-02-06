<?php include('phpSections/server.php'); ?>
<?php include('phpSections/reviewquery.php'); ?>

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

  <?php include('phpSections/errors.php'); ?>


  <div class="introduction" style="margin-bottom: 75px">
       <p>Read some of the reviews from our beloved customers!</p>
  </div>


  <table class="reviewtable">
    <tr style="background-color: blue; color: yellow; font-weight: bold;">
      <th>NAME</th>
      <th>REVIEW 1-5</th>
      <th>COMMENT</th>
    <?php FOREACH($reviews as $review){ ?>
    </tr>
    <tr>
      <th> <?php echo htmlspecialchars($review['name'])?> </th>
      <th> <?php echo htmlspecialchars($review['value'])?> </th>
      <th> <?php echo htmlspecialchars($review['comment'])?> </th>
     </tr>
    <?php } ?>

  </table>

  <?php if(isset($_SESSION['name'])){ ?>

  <div class="introduction" style="margin-bottom: 75px">
       <p>We would love to hear your thoughts as well!</p>
  </div>

    <form method="POST" action="reviews.php">
      <div class="reviewform">
        <div class="reviewformelement">
         <p>Your name:</p>
          <input type="text" name="reviewername" value="<?php echo $_SESSION['name'] ?>" style="text-align: center" readonly>
        </div>
        <div class="reviewformelement">
          <p>Review us from 1 - 5!</p>
          <input type="number" style="text-align:center" min="1" max="5" style="margin-left-left: 300px" name="reviewvalue">
        </div>
        <div class="reviewformelement">
         <p>Add a comment!</p>
          <input type="text" name="reviewcomment">
        </div>
      </div>

  <input type="submit" name="reviewsubmit" value="Submit" class="orderbutton" style="font-size:20px; margin-top: 20px; margin-left: 740px" onClick="window.location.reload();">
  </form>

  <?php } else {?>
      <div class="introduction">
        <p>You have to be logged in to post a review!</p>
      </div>
  <?php } ?>

  <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>