<?php

include('database.php');
if (!isset($_SESSION)) {
  session_start();
}
// gets the total price from the cart as a post
$total_price = 0;
if (isset($_POST['total'])) {
  $total_price = $_POST['total'];
}

// if the user is not logged in, redirect them to the login page.
if ($_SESSION['user'] <= 0) {
  header("Location: cartError.php");
} // if


$_SESSION['user'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> SAJ</title>
  <link rel="stylesheet" href="main.css">
  <link rel="shortcut icon" href="favicon.ico">
  <script src="checkLogin.js"></script>

</head>

<body>
  <!-- Paste the following php files below into your file to obtain the navigation and footer-->
  <!-- Make sure your files that contains HTML are .php-->
  <?php include('header.php'); ?>

  <!--Replace the div below with your content-->
  <div id="checkout">
    <h1>
      Checkout
    </h1>



    <form name="checkout_form" action="processPayment.php" method="post">

      <fieldset>
        <legend>Shipping Information</legend>
        <div id="in">
          <label for="">Address 1</label>
          <input type="text" name="Address1" placeholder="200 D.W. Brooks Dr" required>
          <label for="">Address 2</label>
          <input type="text" name="Address2" placeholder="(optional)">
          <label for="">City</label>
          <input type="text" name="City" placeholder="Athens" required>
          <label for="">State</label>
          <input type="text" name="State" placeholder="GA" required>
        </div>
      </fieldset>

      <fieldset>
        <legend>Payment Information</legend>
        <div id="in1">
          <label for="creditCard">Card Num.</label>
          <input type="text" name="creditCard" id="creditCard" placeholder="1111 2222 3333 4444" required>
          <label for="cvv">Sec. Code</label>
          <input type="text" name="cvv" id="cvv" placeholder="555" required>
          <label for="Expiration">Exp. </label>
          <div id="stop">
            <input class="exp" type="number" name="exp-month" id="exp-month" placeholder="02" size="2" min="1" max="12"required>
            <span> / </span>
            <input class="exp" type="number" name="exp-year" id="exp-year" placeholder="2020" size="4" min="2000" max="3000" required>
          </div>
        </div>
      </fieldset>

      <fieldset>
        <legend>Contact Information</legend>
        <div id="in2">
          <label for="">Email</label>
          <input type="email" name="Email" placeholder="customer@sajmarketplace.com" required>
        </div>
      </fieldset>

      <fieldset id="end">
        <div id="total">
          <strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
          <br>
          <input type="hidden" name="total" value="<?php echo $total_price ?>">
          <input type="submit" name="" value="Confirm Payment">
        </div>
      </fieldset>
    </form>
  </div>

  <div id="footer">
    <?php include('footer.php'); ?>
  </div>
</body>

</html>