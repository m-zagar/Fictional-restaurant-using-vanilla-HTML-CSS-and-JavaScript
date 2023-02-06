<?php

    session_start();

    $name = '';
    $surname = '';
    $email = '';
    $errors = array();

    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'restaurant');

    //register
    if(isset($_POST['regOk'])){
        $name = mysqli_real_escape_string($conn, $_POST['regName']);
        $surname = mysqli_real_escape_string($conn, $_POST['regSurname']);
        $email = mysqli_real_escape_string($conn, $_POST['regEmail']);
        $regPassword_1 = mysqli_real_escape_string($conn, $_POST['regPassword_1']);
        $regPassword_2 = mysqli_real_escape_string($conn, $_POST['regPassword_2']);

        //ensure inputs are not empty
        if(empty($name)){
            array_push($errors, "Name is required!");
        }
        if(empty($surname)){
            array_push($errors, "Surname is required!");
        }
        if(empty($email)){
            array_push($errors, "Email is required!");
        }
        if(empty($regPassword_1)){
            array_push($errors, "Password is required!");
        }
        if($regPassword_1 != $regPassword_2){
            array_push($errors, "Passwords do not match!");
        }

        //if no errors, save user to database
        if(count($errors) == 0){
            $password = md5($regPassword_1);
            $sql = "INSERT INTO accounts (name, surname, password, mail)
                    VALUES ('$name', '$surname', '$password', '$email')";
            mysqli_query($conn, $sql);

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            $_SESSION['loggedon'] = '1';
            header('location: index.php');
        }

    }

    //login
    if(isset($_POST['logOk'])){
        $email = mysqli_real_escape_string($conn, $_POST['logEmail']);
        $logPassword = mysqli_real_escape_string($conn, $_POST['logPassword']);

        //ensure inputs are not empty
        if(empty($email)){
            array_push($errors, "Email is required!");
        }
        if(empty($logPassword)){
            array_push($errors, "Password is required!");
        }

        if(count($errors) == 0){
            $password = md5($logPassword);
            $sql = "SELECT * FROM accounts WHERE mail='$email' AND password='$password'";
            $sql2 = "SELECT name, surname, mail FROM accounts WHERE mail='$email' AND password='$password'";
            $query = mysqli_query($conn, $sql);
            $query2 = mysqli_query($conn, $sql2);
            $result = mysqli_fetch_assoc($query2);
            $name = $result['name'];
            $surname = $result['surname'];
            $email = $result['mail'];
            echo $resultstring;

            if(mysqli_num_rows($query) == 1){
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['email'] = $email;
                $_SESSION['loggedon'] = '1';
                header('location: index.php');
            }else{
                array_push($errors, "Invalid email/password!");
                header('location: authentication.php');
            }
        }
    }


    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['loggedon']);
        header('location: index.php');
    }


?>