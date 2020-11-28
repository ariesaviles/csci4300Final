<?php

include('database.php');

if (!isset($_SESSION)) {
    session_start();
}

// if the user is not logged in, redirect them to the login page.
if ($_SESSION['user'] <= 0) {
    header("Location: cartError.php");
}//if

$user = $_SESSION['user'];

$q2 = "SELECT * FROM carts WHERE cartCustomerID = '$user'";
$cartProducts = $db->query($q2);

if(isset($_POST['Address1'], $_POST['City'],$_POST['State'] )){

    $address = $_POST['Address1']." ".$_POST['Address2']." ".$_POST['City'].",".$_POST['State'];

    $date = date("Y-m-d");

    // adds to order database
    $query = "INSERT INTO orders (customerID, orderDate, address)
        VALUES ('$user','$date','$address')";

    if($db->exec($query) == TRUE){
        $orderID = $db->lastInsertId();

        foreach ($cartProducts as $cart) {
            $productID = $cart["cartProductID"];
            $quantity = $cart["cartProductQuantity"];

            $query = "INSERT INTO orderProducts (orderID, productID, quantity)
                VALUES ('$orderID', '$productID', '$quantity')";
            $db->exec($query);
        }

        // delete entries from cart database
        $q1 = "DELETE FROM carts WHERE cartCustomerID = $user";
        $cartProducts = $db->query($q1);
    }
}


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
