<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> SAJ</title>
        <link rel="stylesheet" href="main.css">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
        <!-- Paste the following php files below into your file to obtain the navigation and footer-->
        <!-- Make sure your files that contains HTML are .php-->
        <?php include('header.php'); ?>

        <!--Replace the div below with your content-->

        <div id="login">

            <form name="login_form">
                <fieldset id="login_section">
                    <legend><b>Login/Create Account</b></legend>
                    <label for="username">Username:</label>
                    <input type="text" id="username" required><br>
                    <label for="passwrd">Password:</label>
                    <input type="password" id="passwrd" required><br>
                    <input type="submit" value="Login" id="login_submit"> <br>
                    <a href="newUser.php" id="contact_link">Are you a new user?</a>
                </fieldset>
            </form>

        </div>

        <?php include('footer.php'); ?>
    </body>
</html>