<?php
include('database.php');

// Get the product ID from the imnage clicked. If any issues occur, there will be a default value of 1
if (!isset($productID)) {
    $productID = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($productID == NULL || $productID == FALSE) {
        $productID = 1;
    } // inner if
} // if

// get the products
$query = "SELECT * FROM products WHERE productID='$productID'";
$products = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SAJ</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <?php include('header.php'); ?>
    <div id="product_content">
        <?php foreach ($products as $product) : ?>

            <!-- Display the product image -->
            <aside>
                <img src='<?php echo $product['productImageURL'] ?>' alt='Item'>
            </aside>

            <!-- Display the product information -->
            <main>
                <h2><?php echo $product['productName'] ?></h2>
                <form name="addToCart_form" method="post" action="addToCart.php">
                    <p for="price"><b>$<?php echo $product['listPrice'] ?></b></p>
                    <!-- Display the quantity dropdown menu -->
                    <label for="quantity">Quantity:</label>
                    <select name="itemqty">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </option>
                        <?php endfor; ?>
                    </select><br><br>
                    <!-- hiddent value for the product ID -->
                    <input type="hidden" name="product_id" value="<?php echo $productID ?>">
                    <!-- Add to cart button -->
                    <button type="submit" id="addToCart_submit">Add to Cart <img src="add_cart.svg" alt='Add to Cart'></button><br>
                </form>
                <!-- Product description -->
                <p><?php echo $product['productDescription'] ?></p>
            </main>

        <?php endforeach; ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>