<?php

include('database.php');
if (!isset($_SESSION)) {
    session_start();
} // if

// get the orderIDs associated with the userID
$userID = $_SESSION['user'];
$q1 = "SELECT * FROM orders WHERE customerID = '$userID' ORDER BY orderID DESC";
$orders = $db->query($q1);

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

    <div class="orders">

        <?php
        // loops throught the results of the query to get the order IDs
        foreach ($orders as $order) :
            // save the orderID
            $orderID = $order['orderID'];
            // save the total Price of the order
            $totalPrice = $order['totalPrice'];
            // save the address of the order
            $address = $order['address'];

            // get the products associated with the current orderID
            $q2 = "SELECT * FROM orderproducts WHERE orderID = '$orderID'";
            $orderProducts = $db->query($q2); ?>

            <fieldset>
                <legend><b>Order from: <?php echo $order['orderDate']; ?></b></legend>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Code</th>
                        <th id="col_name">Name</th>
                        <th id="col_quantity">Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>

                    <?php
                    // loop through the results of the query for the products of the orderID
                    foreach ($orderProducts as $orderProduct) :

                        // save the order product ID
                        $orderProductID = $orderProduct['productID'];

                        // save the order quantity
                        $quantity = $orderProduct['quantity'];

                        // get the products associated with the current orderID
                        $q2 = "SELECT * FROM products WHERE productID = '$orderProductID'";
                        $Products = $db->query($q2);

                        // loop through the list of products associated with the product ID
                        foreach ($Products as $product) :
                            $finalPrice = $quantity * $product['listPrice'];
                    ?>
                            <tr>
                                <td>
                                    <div id="cart_square">
                                        <img src='<?php echo $product['productImageURL'] ?>' id="cartImage" alt='Item' />
                                    </div>
                                </td>
                                <td><?php echo $product['productCode'] ?></td>
                                <td><?php echo $product['productName'] ?></td>
                                <td id="quantity"><?php echo $quantity; ?></td>
                                <td>$<?php echo $finalPrice ?></td>
                            </tr>
                    <?php endforeach;
                    endforeach;
                    ?>
                </table>

                <p><b>Total Price: $<?php echo $totalPrice; ?></b></p>
                <p><b>Shipped to: <?php echo $address; ?></b></p>
            </fieldset>


        <?php endforeach; ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>