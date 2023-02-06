<?php

	$orderemail = $_SESSION['email'];

	$listoforders = "SELECT * FROM orders WHERE email='$orderemail'";

	$ordersresult = mysqli_query($conn, $listoforders);

	$orders = mysqli_fetch_all($ordersresult, MYSQLI_ASSOC);
?>