<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SAJ</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="passwordMatch.js"></script>
    <script src="checkLogin.js"></script>
    
</head>

<body>
    <!-- Paste the following php files below into your file to obtain the navigation and footer-->
    <!-- Make sure your files that contains HTML are .php-->
    <?php include('header.php'); ?>

    <!--Replace the div below with your content-->
    <div id="newUser">
        <form name="newUser_form" id="newUser_form" method="POST" action="processNewUser.php" onsubmit="event.preventDefault(); checkSame();"> <!--  -->
            <fieldset id="newUser_section">
                <legend><b>Create a New Account</b></legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="passwrd">Password:</label>
                <input type="password" onchange="checkLength(this,6)" id="passwrd" name="passwrd" placeholder="At least 6 characters" pattern=".{6,}" title="6 or more characters" required><br>
                <label for="confirmPasswrd">Confirm Password:</label>
                <input type="password" onchange="checkLength(this,6)" id="confirmPasswrd" name="confirmPasswrd" placeholder="Re-enter password" pattern=".{6,}" title="6 or more characters" required><br>
                <!-- <p id="error">Welcome!</p> -->
                <input type="submit" value="Sign Up" id="newUser_submit" ><br>


                <!-- <input type="text" onchange="checkLength(this,3)" name="subject" id="subject" required><br> -->


                <!-- <script>
                    document.getElementById("error").innerHTML = newFunction();
                </script> -->
            </fieldset>
        </form>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>