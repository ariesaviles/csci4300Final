<?php

    session_start();
    include_once('database.php');

    $error = false;

    if(isset($_POST['username'], $_POST['password'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query="SELECT * FROM customers
          WHERE customerUserName='$username' AND customerPassword='$password'";

        $data=$db->query($query);

        if($data->rowCount()>0){
            $_SESSION['user']=$data->fetch()['customerID'];
            header("Location: home.php");
        }
        else{
            $error=true;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> SAJ</title>
        <link rel="stylesheet" href="main.css">
        <script src="checkLogin.js"></script>
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <!-- Paste the following php files below into your file to obtain the navigation and footer-->
        <!-- Make sure your files that contains HTML are .php-->
        <?php include('header.php'); ?>

        <!--Replace the div below with your content-->

        <div id="login">

            <form name="login_form" method="post">
                <fieldset id="login_section">
                    <legend><b>Login/Create Account</b></legend>
                    <label for="username">Username:</label>
                    <input type="text" onchange="checkLength(this,3)" name="username" id="username" required><br>
                    <label for="password">Password:</label>
                    <input type="password" onchange="checkLength(this,6)" name="password" id="password" required><br>
                    <input type="submit" value="Login" id="login_submit"><br>
                    <?php if($error){echo "<p class='login_fail'><b>Your password and email do not match. Please try again</b></p>";}?>
                    <a href="newUser.php" id="contact_link">Are you a new user?</a>
                </fieldset>
            </form>

        </div>
        <?php include('footer.php'); ?>
    </body>
</html>
