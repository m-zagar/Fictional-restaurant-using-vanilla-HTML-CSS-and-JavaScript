<?php
    include('phpSections/server.php');
?>

<html>

<?php include('htmlSections/htmlHead.php'); ?> 

    <body style="background-color:aqua; font-family: '8bit';">

        <?php include('phpSections/errors.php'); ?>

        <div class="logregContainer">
            <div class="logregItem" style="padding-top:115px;">
                <h2>Log in</h2>
                </br></br>
                <form style="text-align:center" method="POST" action="authentication.php">
                    <p>Email:</p>
                    <input type="email" name="logEmail">
                    </br></br>
                    <p>Password:</p>
                    <input type="password" name="logPassword">
                    </br></br>
                    <input type="submit" name="logOk" value="OK" class="sub">
                </form>
            </div>
            <div class="logregItem" style="padding-top:15px;">
                <h2>sign up</h2>
                </br></br>
                <form style="text-align:center" method="POST" action="authentication.php">
                    <p>Name:</p>
                    <input type="text" name="regName" value="<?php echo $name; ?>">
                    </br></br>
                    <p>Surname:</p>
                    <input type="text" name="regSurname" value="<?php echo $surname; ?>">
                    </br></br>
                    <p>email:</p>
                    <input type="email" name="regEmail" value="<?php echo $email; ?>">
                    </br></br>
                    <p>password:</p>
                    <input type="password" name="regPassword_1">
                    </br></br>
                    <p>Confirm password:</p>
                    <input type="password" name="regPassword_2">
                    </br></br>
                    <input type="submit" name="regOk" value="OK" class="sub">
                </form>
            </div>
        </div>

        <a href="index.php">
            <input type="button" value="Homepage" id="homebutton">
        </a>

<?php include('htmlSections/htmlFoot.php') ?>  
</html>

