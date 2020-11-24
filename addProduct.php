<?php
    include('database.php');

    $query='SELECT * FROM categories';

    $categories=$db->query($query);

    if(isset($_POST['category_id'], $_POST['code'], $_POST['name'],$_POST['price'],
        $_POST['url'], $_POST['description'])){
        $category=$_POST['category_id'];
        $code=$_POST['code'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $imageURL=$_POST['url'];
        $description=$_POST['description'];

        $query="INSERT INTO products
            (categoryID, productCode, productName, listPrice, productImageURL, productDescription) VALUES
            ('$category', '$code', '$name', '$price', '$imageURL', '$description')";

        $db->exec($query);
    }

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
    <div id="contact">

        <form name="addProduct_form" method="post">
            <fieldset id="contact_section">
                <legend><b>Add New Product</b></legend>
                <label>Category:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category):?>
                        <option value="<?php echo $category['categoryID']?>"><?php echo $category['categoryName']?></option>
                    <?php endforeach; ?>
                </select><br>
                <label>Code:</label>
                <input type="text" name="code" required><br>
                <label>Name:</label>
                <input type="text" name="name" required><br>
                <label>List Price:</label>
                <input type="number" min="0" step="0.01" name="price" required><br>
                <label>Image URL:</label>
                <input type="url" name="url" required><br>
                <p>Describe:</p>
                <textarea name="description" id="description" placeholder="Enter your description..."></textarea>
                <input type="submit" value="Add Product" id="contact_submit">
            </fieldset>
        </form>

    </div>

        <?php include('footer.php'); ?>
    </body>
</html>