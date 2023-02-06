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
      <p>Your info, a whole 3 columns of it, can be seen here!</p>
  </div>

  <table class="reviewtable" style="margin-top:50px;">
    <tr style="background-color: blue; color: yellow; font-weight: bold; text-align: center; font-size: 25px">
      <td>Name</td>
      <td>Surname</td>
      <td>Email</td>
    </tr>
    <tr>
      <th><?php echo $_SESSION['name'] ?></th>
      <th><?php echo $_SESSION['surname'] ?></th>
      <th><?php echo $_SESSION['email'] ?></th>
    </tr>
  </table>

  <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>