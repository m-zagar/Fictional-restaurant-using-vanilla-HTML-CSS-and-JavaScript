<?php


    if(isset($_POST['reviewsubmit'])){
        $reviewername = mysqli_real_escape_string($conn, $_POST['reviewername']);
        $reviewvalue = mysqli_real_escape_string($conn, $_POST['reviewvalue']);
        $reviewcomment = mysqli_real_escape_string($conn, $_POST['reviewcomment']);

        if(empty($reviewvalue)){
            array_push($errors, "Please select a value!");
        }
        if(empty($reviewcomment)){
            array_push($errors, "Please post a comment!");
        }

        if(count($errors) == 0){

            $insertreview = "INSERT INTO reviews (name, reviewValue, Comment)
                    VALUES ('$reviewername', '$reviewvalue', '$reviewcomment')";
            if(mysqli_query($conn, $insertreview)){
                echo "<script> alert('Thanks for leaving a review! Your words help us grow more and become better everyday!'); </script>";
                
            }
         }
    }
    
    //reviews
    $sqlreview = "SELECT name, reviewValue AS value, Comment AS comment FROM reviews";

    $reviewresult = mysqli_query($conn, $sqlreview);

    $reviews = mysqli_fetch_all($reviewresult, MYSQLI_ASSOC);


?>