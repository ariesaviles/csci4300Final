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
    <!-- Paste the following php files below into your file to obtain the navigation and footer-->
    <!-- Make sure your files that contains HTML are .php-->
    <?php include('header.php'); ?>
    <!-- Preview of homepage format, until the database is added-->
    <div id="product_content">
        <?php foreach ($products as $product) : ?>

            <aside>
                <img src='<?php echo $product['productImageURL'] ?>' alt='Item'>
            </aside>

            <main>
                <h2><?php echo $product['productName'] ?></h2>
                <form name="addToCart_form" method="post" action="addToCart.php">
                    <label for="price"><b>$<?php echo $product['listPrice'] ?></b></label>


                    <br>
                    <label for="quantity">Quantity:</label>
                    <select name="itemqty">
                      <?php for($i = 1; $i <= 10; $i++) : ?>
                        <option value="<?php echo $i; ?>">
                          <?php echo $i; ?>
                        </option>
                      <?php endfor; ?>
                    </select>
                    <br>


                    <input type="hidden" name="product_id" value="<?php echo $productID?>">
                    <input type="submit" value="Add to Cart" id="addToCart_submit"> <br>
                </form>
                <p> Add product Desctiption here. Add product Desctiption here. Add product Desctiption here. Add product Desctiption here.
                Add product Desctiption here. Add product Desctiption here. Add product Desctiption here. Add product Desctiption here.
                Add product Desctiption here. Add product Desctiption here. Add product Desctiption here. Add product Desctiption here.
                </p>
            </main>

        <?php endforeach; ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>
