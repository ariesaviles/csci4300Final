<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SAJ</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <?php include('header.php'); ?>
    <!-- This page is to make sure there were no errors attempting to add the user to the database.
         If there was an error, then it should display "Error adding user to database" 
         and redirect back to create account page. If it was successful, then It should 
         say "Account Creation Successful!" and redirect to the login page. This cannot be implemented 
         until the database is created. This page will also automatically redirect after 2 seconds. -->
    <div id="processNewUser">
        <fieldset>
            <?php
                // account is just a tester variable
                $account = '5';
                // if account creation was not successful...
                if ($account < 0) {
            ?>
                <meta http-equiv="refresh" content="2;newUser.php" />
                <h3> Error adding user to database! Redirecting to login page... </h3>
            <?php } else { ?>
                <meta http-equiv="refresh" content="2;login.php" />
                <h3> Account Creation Successful! Redirecting in 2 seconds... </h3>
            <?php } // if-else ?>
        </fieldset>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>