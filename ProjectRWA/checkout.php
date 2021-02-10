<?php include('phpSections/server.php') ?>
<?php include('phpSections/checkoutorder.php') ?>

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


<form method="POST" action="checkout.php">

  <table class="checkoutlist">
    <tr style="background-color: yellow; font-size: 20px">
      <th>Product</th>
      <th>Price (in kn)</th> 
      <th>Quantity</th>
      <th>Total (in kn)</th>
    </tr>
    <tr class="listproducts">
    </tr>
  </table>

  <div class="introduction" style="margin-bottom: 75px">
       <p>Please fill out your details before ordering!</p>
  </div>

  </br></br>

  <div class="reviewform">
    <div class="reviewformelement">
      <p>Your name:</p>
      <input type="text" name="orderName" value="<?php echo $_SESSION['name'] ?>" style="text-align: center" readonly>
    </div>
    <div class="reviewformelement">
      <p>Your surname:</p>
      <input type="text" name="orderSurname" value="<?php echo $_SESSION['surname'] ?>" style="text-align: center" readonly>
    </div>
    <div class="reviewformelement">
      <p>Your email:</p>
      <input type="text" name="orderEmail" value="<?php echo $_SESSION['email'] ?>" style="text-align: center" readonly>
    </div>
    <div class="reviewformelement">
      <p>Your adress:</p>
      <input type="text" name="orderAdress" style="text-align: center">
    </div>
    <div class="reviewformelement">  
      <p>Payment method:</p>
      </br>
      <input type="radio" id="cash" name="paywith" value="cash" onclick="javascript:cashorcard();">
      <label for="cash"> Cash</label><br>
      <input type="radio" id="card" name="paywith" value="card" onclick="javascript:cashorcard();">
      <label for="card"> Card</label><br>
    </div>
    <div id="cardnum" style="display:none">  
      <p>Card number:</p>
      <input type="number" name="orderCard" style="text-align: center" min="1000000000000000", max="9999999999999999">
    </div>
  </div>

  <input type="submit" name="ordersubmit" value="Order" class="orderbutton" style="margin-left:746px; margin-top: 30px;">
  </br></br></br></br>

</form>

<input type="button" value="Reset" style="margin-left:750px" class="orderbutton" onclick="reset()">

  <script src="jsSections/checkout.js"></script>
  <?php include('htmlSections/htmlFoot.php') ?>

</html>