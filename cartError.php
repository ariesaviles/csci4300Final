<?php

include('database.php');


?>

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
    <div id="processNewUser">
        <fieldset>
                <meta http-equiv="refresh" content="2;login.php" />
                <h3> Cart cannot be accessed if you are not logged in!<br> Redirecting to login page... </h3>
        </fieldset>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>