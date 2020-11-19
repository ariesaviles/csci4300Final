<?php
require_once('database.php');

$product_id = $_POST['code'];
echo $product_id;
// Delete the product from the database
$query = 'DELETE FROM carts WHERE cartProductID = :product_id';
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$success = $statement->execute();
$statement->closeCursor();

// header will take the user to the cart page 
header("Location: shoppingCart.php");
// Display the Product List page
// include('shoppingCart.php');

?>
