<?php

include('database.php');


// get the products
$productID = $_POST['product_id'];

// gets the product that matches the id
$query = "SELECT * FROM products WHERE productID='$productID'";
$products = $db->query($query);
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
    <!-- Paste the following php files below into your file to obtain the navigation and footer-->
    <!-- Make sure your files that contains HTML are .php-->
    <?php include('header.php'); ?>

    <!--Replace the div below with your content-->

    <div id="addToCart">
        <h1> Under Construction</h1>

    </div>

    <?php include('footer.php'); ?>
</body>

</html>