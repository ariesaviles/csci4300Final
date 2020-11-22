<?php
// this php simply adds the specified product to the carts database
// after adding, displays the shoppingCart.php

if (!isset($_SESSION)) {
  session_start();
  // header("Location: cartError.php");
}

// if the user is not logged in, redirect them to the login page.
if ($_SESSION['user'] <= 0) {
  header("Location: cartError.php");
} // if

$productID = $_POST['product_id']; // dependent on the product.php form
echo $productID;
$quantity = filter_input(INPUT_POST, 'itemqty'); // dependent on the product.php form

//$cartID = 1;
//echo $cartID;

$customerID = $_SESSION['user'];

$_SESSION['cartID'] = $_SESSION['user'];
echo $_SESSION['cartID'];

if ($productID == null || $quantity == null || $customerID == null) {
  // error message goes hereecho
  echo "error";
  $error = true;
} else {
 require_once('database.php');

  // checks to see if the cart for this product and customer already exist
  $query = "SELECT * FROM carts WHERE cartCustomerID = '$customerID' AND cartProductID = '$productID'";
  $item = $db->query($query);

  if($item->rowCount() > 0){
      //update the existing cart with new quantitu
      $oldCount = $item->fetch()['cartProductQuantity'];
      $count = $oldCount + $quantity;
      $query = "UPDATE carts SET cartProductQuantity = '$count' WHERE 
                cartCustomerID = '$customerID' AND cartProductID = '$productID'";
      $db->prepare($query)->execute();
  }else{
      // if it doesn't exist, create a new cart
      $query = 'INSERT INTO carts (cartCustomerID, cartProductID, cartProductQuantity)
          VALUES(:customerID, :cartProductID, :quantity)';

      $insert = $db->prepare($query);
      //$insert->bindValue(':cartID', $cartID);
      $insert->bindValue(':customerID', $customerID);
      $insert->bindValue(':cartProductID', $productID);
      $insert->bindValue(':quantity', $quantity);
      $insert->execute();
      $insert->closeCursor();
  }

  // header will take the user to the cart page 
  header("Location: shoppingCart.php");
   // include('shoppingCart.php');

}


?>