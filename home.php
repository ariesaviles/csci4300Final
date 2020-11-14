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
        <div id="homepage_content">
            <?php for ($i = 1; $i < 10; $i++) {
                echo "<a href='construction.html' class='products' >";
                echo "<img src='https://loremflickr.com/260/250/{$i}' alt='Item'>";
                echo "<p>Product {$i} Name</p>";
                echo "<p><b>$25.00</b></p>";
                echo "</a>";
            } ?>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>