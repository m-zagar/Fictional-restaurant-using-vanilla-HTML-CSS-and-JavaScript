<?php


	if(isset($_POST['ordersubmit'])){
	    $orderername = mysqli_real_escape_string($conn, $_POST['orderName']);
       $orderersurname = mysqli_real_escape_string($conn, $_POST['orderSurname']);
       $ordereremail = mysqli_real_escape_string($conn, $_POST['orderEmail']);
       $ordereradress = mysqli_real_escape_string($conn, $_POST['orderAdress']);
       $total = mysqli_real_escape_string($conn, $_POST['totalcost']);
       $date = date('Y-m-d H:i:s');
       $checkpayment = mysqli_real_escape_string($conn, $_POST['paywith']);
       if($checkpayment == 'card'){
       		$checkpayment = mysqli_real_escape_string($conn, $_POST['orderCard']);
          $checkpayment = md5($checkpayment);
       }
       if(empty($ordereradress)){
           array_push($errors, "Please select an adress!");
       }
       if(empty($checkpayment)){
           array_push($errors, "Please select a payment method or enter card number!");
       }
       if(empty($total)){
           array_push($errors, "Your cart is empty!");
       }
       if(count($errors) == 0){

            $insertorder = "INSERT INTO 
            orders (name, surname, email, adress, total, dateoforder, paidwith)
                   VALUES ('$orderername', '$orderersurname', '$ordereremail', 
                   '$ordereradress', '$total', '$date', '$checkpayment')";
           
          if(mysqli_query($conn, $insertorder)){
            echo "<script> localStorage.clear(); </script>";
            echo "<script> alert('Thanks for ordering! Delivery should be there soon! Have a pleasant evening!'); </script>";
          }

       }
   }




?>