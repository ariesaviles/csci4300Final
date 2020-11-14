<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SAJ</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="passwordMatch.js"></script>
</head>

<body>
    <!-- Paste the following php files below into your file to obtain the navigation and footer-->
    <!-- Make sure your files that contains HTML are .php-->
    <?php
    // include('database.php');
    include('header.php');

    // THIS CODE IT TESTER CODE FROM ASSIGNMENT 11
    // // the cateogry is not set, assign the default value of 1
    // if (!isset($category)) {
    //     $category = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
    //     if ($category == NULL || $category == FALSE) {
    //         $category = 1;
    //     } // inner if
    // } // if

    // // $category = $_GET['category_id'];

    // // Get all the category names
    // $query = 'SELECT * FROM categories';
    // $items = $db->query($query);

    // // Get all the products
    // $query = "SELECT * FROM products WHERE categoryID='$category'";
    // $products = $db->query($query);

    // // get the Product Category name
    // $queryName = "SELECT * FROM categories WHERE categoryID='$category'";
    // $temp = $db->query($queryName);
    // $name = $temp->fetch();

    ?>

    <!--Replace the div below with your content-->
    <div id="products">
        <!-- <h2>Product List</h2>
        <aside>
            <h3>Categories</h3>
            <ul>
                
                <?php //foreach ($items as $item) : ?>
                    <li>
                        <a href="?category_id=<?php //echo $item['categoryID']; ?>">
                            <?php //echo $item['categoryName']; ?>
                        </a>
                    </li>
                <?php //endforeach; ?>
            </ul>
        </aside>
        <section>
            <h3> <?php //echo $name['categoryName'] ?></h3>
            <table>
                <?php //foreach ($products as $product) : ?>
                    <tr>
                        <td><a href="about.php"><img src="favicon.ico" id="logo" alt="SAJ Logo"></a></td>
                        <td><?php //echo $product['productCode']; ?></td>
                        <td><?php //echo $product['productName']; ?></td>
                        <td><?php //echo $product['listPrice']; ?></td>

                    </tr>
                <?php //endforeach; ?>
            </table>
        </section> -->
    </div>
    <?php include('footer.php'); ?>
</body>

</html>