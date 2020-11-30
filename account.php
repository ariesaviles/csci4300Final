<?php

include('database.php');
if (!isset($_SESSION)) {
    session_start();
} // if

$userID = $_SESSION['user'];
$q2 = "SELECT * FROM customers WHERE customerID = '$userID'";
$users = $db->query($q2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> SAJ</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="account" id="aboutUs">
        <?php foreach ($users as $user) : ?>
            <fieldset>
                <legend><b> <?php echo $user['customerUserName']; ?>'s Account </b></legend>
                <p>Email: <?php echo $user['customeremail']; ?></p>
                <p>Valued customer since: <?php echo $user['customerCreationDate']; ?></p>
                <div class="zoom" href="orders.php">
                    <a href="orders.php">
                        <p>View Orders</p>
                    </a>
                </div>
            </fieldset>
        <?php endforeach; ?>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>