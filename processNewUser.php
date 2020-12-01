<?php

include('database.php');

// get the info the user entered in the 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = date("Ymd");
$userExists = FALSE;

// query to see if this email already exitsts in the database
$query = "SELECT * FROM `customers` WHERE customeremail = '$email' OR customerUserName = '$username'";
$userCheck = $db->query($query);

// Check if the query returned rows and if so, the user already exists.
if ($userCheck->rowCount() > 0) {
    $userExists = TRUE;
}


// if the user does not exists, then add them to the database
if ($userExists == FALSE) {
    $query = "INSERT INTO customers 
        (customerUserName, customeremail, customerPassword, customerCreationDate) 
        VALUES ('$username', '$email', '$password', '$date')";
    $db->exec($query);
} // if
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
            <?php if ($userExists == TRUE) { ?>
                <meta http-equiv="refresh" content="2;newUser.php" />
                <h3> Error: User already Exists. Please try again... </h3>
            <?php } else { ?>
                <meta http-equiv="refresh" content="2;login.php" />
                <h3> Account Creation Successful! Redirecting to login page... </h3>
            <?php } // if-else 
            ?>
        </fieldset>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>