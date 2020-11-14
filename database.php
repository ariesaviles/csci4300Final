<?php
    // Connect to the database. 


    //This code is just for testing purposes. 
     $dsn='mysql:host=localhost;dbname=saj';
     $username='root';
     $password='';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('databaseError.php');
        exit();
    }
?>

