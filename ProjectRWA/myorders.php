<?php include('phpSections/server.php') ?>
<?php include('phpSections/myordersQuery.php') ?>

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
      <p>Below is a list of your orders!</p>
  </div>


  <table class="reviewtable" style="width:100%; margin-left: 0px ; margin-top: 50px;" >
    <tr style="background-color: blue; color: yellow; font-weight: bold;">
      <th>orderID</th>
      <th>name</th>
      <th>surname</th>
      <th>email</th>
      <th>adress</th>
      <th>items</th>
      <th>total</th>
      <th>date of order</th>
      <th>payment method</th>
    <?php FOREACH($orders as $order){ ?>
    </tr>
    <tr>
      <th> <?php echo htmlspecialchars($order['orderID'])?> </th>
      <th> <?php echo htmlspecialchars($order['name'])?> </th>
      <th> <?php echo htmlspecialchars($order['surname'])?> </th>
      <th> <?php echo htmlspecialchars($order['email'])?> </th>
      <th> <?php echo htmlspecialchars($order['adress'])?> </th>
      <th> <?php echo htmlspecialchars($order['items'])?> </th>
      <th> <?php echo htmlspecialchars($order['total'])?> </th>
      <th> <?php echo htmlspecialchars($order['dateoforder'])?> </th>
      <th> <?php echo htmlspecialchars($order['paidwith'])?> </th>
     </tr>
    <?php } ?>

  </table>


  <script src="jsSections/checkout.js"></script>

  <?php include('htmlSections/htmlFoot.php') ?>

</html>