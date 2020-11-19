<?php
include('database.php');

$query = 'SELECT * FROM products';

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
    <?php include('header.php'); ?>

    <!-- Displays all the products -->
    <div id="homepage_content">
        <?php foreach ($products as $product) : ?>
            <div id="product_square">
                <a href='product.php?id=<?php echo $product['productID'] ?>' class='products'>
                    <img src='<?php echo $product['productImageURL'] ?>' alt='Item'>
                    <p><?php echo $product['productName'] ?></p>
                    <p><b>$<?php echo $product['listPrice'] ?></b></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>