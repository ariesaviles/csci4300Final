<?php

include('database.php');
if(!isset($_SESSION))
{
    session_start();
    // header("Location: cartError.php");
}

//if (isset($_SESSION['cartID'])) {
$user = $_SESSION['cartID'];
$q1 = "SELECT customerUserName FROM customers WHERE customerID = $user ";
if (isset($q1)) {
  $name = $db->query($q1)->fetch()['customerUserName'];
} else {


}
//} else if (isset($_SESSION['user'])) {
  //$user = $_SESSION['user'];
//}
//$q1 = "SELECT cartProductID FROM carts WHERE cartCustomerID = 3";
//$cartProducts = $db->query($q1) // the product IDs in the user's cart

$q2 = "SELECT * FROM products INNER JOIN carts
        ON products.productID = carts.cartProductID
        WHERE productID IN (SELECT cartProductID FROM carts WHERE cartCustomerID = '$user')";
$cartProducts = $db->query($q2)


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
    <h1><p id="cartName"><?php
  /*  $query="SELECT * FROM customers
      WHERE customerUserName='$username' AND customerPassword='$password'";

    $data=$db->query($query);*/

    if (isset($_SESSION['user'])) {
        echo $name. "'s Shopping Cart";
    } else {
        echo "Please login to access your cart.";

    }
    ?></p>
    </h1>

    <table class="cartTable">
    <tbody>
    <tr>
    <td></td>
    <th>ITEM NAME</th>
    <th>QUANTITY</th>
    <th>UNIT PRICE</th>
    <th>ITEM TOTAL</th>
    <td></td>
    </tr>

    <main>

    <div class="addToCart">
      <?php
      if(isset($_SESSION['user'])){
          $total_price = 0;
          echo $name. "'s Shopping Cart";
      ?>

      <?php foreach($cartProducts as $product):?>

          </a>
          <tr>
          <td>
            <img src='<?php echo $product['productImageURL'] ?>' alt='Item' width="70" height="70" />
          </td>
          <td class="prodName"><?php echo $product["productName"]; ?> <br />
            <form method='post' action='removeFromCart.php'>
              <input type='hidden' name='code' value="<?php echo $product["productID"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <button type="submit" name="remove">Remove</button>
          </form>
        </td>

        <td>
          <form method='post' action=''>
          <input type='hidden' name='code' value="<?php echo $product["productID"]; ?>" />
          <input type='hidden' name='action' value="change" />
          <input class="qty" type="hidden" name="qty" value="$product['cartProductQuantity']">
            <p id="qty"><?php echo $product['cartProductQuantity']?></p>

      </form>
        </td>
        <td><p><?php echo "$".$product["listPrice"]; ?></td></p>
<td><p><?php echo "$".$product["listPrice"]*$product["cartProductQuantity"]; ?></td></p>
</tr>
<?php
      //$total_price = 0;
$total_price += ($product["listPrice"]*$product["cartProductQuantity"]);

?>
      <?php endforeach;?>
      <tr>
      <td colspan="5" align="right">
      <strong id="total">TOTAL: <?php echo "$".$total_price; ?></strong>
      </td>
      </tr>
      </tbody>
      </table>
      <?php
}else{
echo "<h3>Please login to access your shopping cart!</h3>";
}
?>
    </div>

  </main>

  <div id="footer">
    <?php include('footer.php'); ?>
  </div>
</body>

</html>
