<?php

include('database.php');

if (isset($_SESSION['cartID'])) {
$user = $_SESSION['cartID'];
$q1 = "SELECT customerUserName FROM customers WHERE = $user ";
$name = $db->query($q1);

} else if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}
//$q1 = "SELECT cartProductID FROM carts WHERE cartCustomerID = 3";
//$cartProducts = $db->query($q1) // the product IDs in the user's cart

$q2 = "SELECT * FROM products INNER JOIN carts
        ON products.productID = carts.cartProductID
        WHERE productID IN (SELECT cartProductID FROM carts WHERE cartCustomerID = '$user')";
$cartProducts = $db->query($q2)

/*
// get the products
$carttID = $_POST['product_id'];

// gets the product that matches the id
$query = "SELECT * FROM carts WHERE productID='$productID'";
$products = $db->query($query);

if(isset($_SESSION))
{
    session_start();
}
*/

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
    <h1><?php
  /*  $query="SELECT * FROM customers
      WHERE customerUserName='$username' AND customerPassword='$password'";

    $data=$db->query($query);*/

    if (isset($_SESSION['user'])) {
        echo $name . "'s Shopping Cart";
    } else {
        echo "Please log in first to see your cart.";
    }
    ?>
    </h1>

    <table class="table">
    <tbody>
    <tr>
    <td></td>
    <td>ITEM NAME</td>
    <td>UNIT PRICE</td>
    </tr>

    <main>

    <div id="addToCart">

      <?php foreach($cartProducts as $product):?>
          </a>
          <tr>
          <td>
            <img src='<?php echo $product['productImageURL'] ?>' alt='Item' width="50" height="40" />
          </td>
          <td><?php echo $product["productName"]; ?> <br />
            <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <button type="submit" name="remove">Remove</button>
          </form>
        </td>
        <td><?php echo "$".$product["listPrice"]; ?></td>
      <?php endforeach;?>

    </div>
  </main>

  <div>
    <?php include('footer.php'); ?>
  </div>
</body>

</html>
