<?php
    include('database.php');

    $term = "";

    if(isset($_GET['query'])) {
        $term = $_GET['query'];
    }

    $query = "SELECT * FROM products WHERE productName LIKE '%$term%'";

    $products=$db->prepare($query);

    $products->execute();

    $count = $products->rowCount();
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
        <!-- Preview of homepage format, until the database is added-->
        <h2><?php echo "Searching for {$term}: found {$count} products" ?></h2>
        <div id="homepage_content">
            <?php foreach($products as $product):?>
                <a href='product.php?id=<?php echo $product['productID']?>' class='products'>
                <img src='<?php echo $product['productImageURL']?>' alt='Item'>
                <p><?php echo $product['productName']?></p>
                <p><b>$<?php echo $product['listPrice']?></b></p>
                </a>
            <?php endforeach;?>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>