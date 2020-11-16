<?php
// this php simply adds the specified product to the carts database
// after adding, displays the shoppingCart.php

if(!isset($_SESSION))
{
    session_start();
}

$productID = $_POST['product_id']; // dependent on the product.php form
$quantity = filter_input(INPUT_POST, 'itemqty'); // dependent on the product.php form
$cartID = $_SESSION['user'];
$customerID = $_SESSION['user'];

if ($productID == null || $quantity == null || $cartID == null || $customerID == null) {
  // error message goes here
  $error=true;
} else {
  require_once('database.php');

  $query='INSERT INTO carts (cartID, cartCustomerID, cartProductID, cartProductQuantity)
          VALUES(:cartID, :customerID, :cartProductID, :quantity)';

  $insert = $db->prepare($query);
  $insert->bindValue(':cartID', $cartID);
  $insert->bindValue(':customerID', $customerID);
  $insert->bindValue(':cartProductID', $productID);
  $insert->bindValue(':quantity', $quantity);
  $insert->execute();
  $insert->closeCursor();

  include('shoppingCart.php');
}


?>
