<?php

    include('database.php');

    if(isset($_POST['product_id'])){
        $productID=$_POST['product_id'];

        $query="DELETE FROM products WHERE productID='$productID'";
        $db->exec($query);
    }

    $name="No name found";

    $category = filter_input(INPUT_GET, 'category_id',
        FILTER_VALIDATE_INT);
    if ($category == NULL || $category == FALSE)
    {
        $query='SELECT * FROM categories';
        $items=$db->query($query);
        if($items->rowCount()>0){
            $category = $items->fetch()['categoryID'];
        }
        else{
            $category=1;
        }
    }
    $query='SELECT * FROM categories';

    $items=$db->query($query);

    $query="SELECT * FROM products WHERE categoryID='$category'";

    $products=$db->query($query);

//    if($items->rowCount()>0){
//        $query="SELECT * FROM categories WHERE categoryID='$category'";
//        $name=$db->query($query)->fetch()['categoryName'];
//    }
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
    <!-- Replace the div below with your content-->
    <div class="removeProduct">

        <aside>
            <ul>
                <?php foreach($items as $item):?>
                    <li><a <?php if($category==$item['categoryID']) echo "id='selected_category'"?>
                         href="?category_id=<?php echo $item['categoryID']?>"><b><?php echo $item['categoryName']?></b></a></li>
                <?php endforeach;?>
            </ul>
        </aside>

        <table>
            <tr>
                <th>Product</th>
                <th>Code</th>
                <th id="col_name">Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php foreach($products as $product):?>
                <tr>
                    <td><img src='<?php echo $product['productImageURL'] ?>' alt='Item' width="70" height="70" /></td>
                    <td><?php echo $product['productCode']?></td>
                    <td><?php echo $product['productName']?></td>
                    <td>$<?php echo $product['listPrice']?></td>
                    <td><form action="removeProduct.php?category_id=<?php echo $category?>" method="post">
                            <input type="hidden" name="product_id" value=<?php echo $product['productID']?>>
                            <input type="submit" value="Delete">
                        </form></td>
                </tr>
            <?php endforeach;?>
        </table>

    </div>

        <?php include('footer.php'); ?>
    </body>
</html>