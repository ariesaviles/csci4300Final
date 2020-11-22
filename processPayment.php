<?php

include('database.php');

session_start();
$user = $_SESSION['user'];
// delete entries from cart database
$q1 = "DELETE FROM carts WHERE cartCustomerID = $user";
$cartProducts = $db->query($q1);


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
                <meta http-equiv="refresh" content="5;home.php" />
                <h3 id="paymentText"> Payment has been processed! <br><br> Products will be shipped to: <br> <?php echo $_POST['Address1'] ?> <br> <?php echo $_POST['City'] ?>, <?php echo $_POST['State'] ?> <br><br> Returning to home page... </h3>
        </fieldset>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
