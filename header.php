<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<div id="header_style">

    <a href="home.php"><img src="SAJlogo.png" id="logo" alt="SAJ Logo"></a>

    <form class="search_box" action="search.php" method="get">
        <input type="text" placeholder="Search" name="query">
        <button type="submit">
            <img src="search.svg" alt="Search">
        </button>
    </form>

    <div class="nav_menu">
        <ul>
            <li><a href="home.php"><b> Products</b></a></li>
            <li><a href="construction.html"><img src="shopping_cart.svg" alt="Shopping cart"><b>Cart</b></a></li>
            <?php if(isset($_SESSION['user'])){
                echo "<li><a href='logout.php'><img src='logout.svg' alt='Profile'><b>Logout</b></a></li>";
            } else{
                echo "<li><a href='login.php'><img src='login.svg' alt='Profile'><b>Login</b></a></li>";
            }?>
            <li><a href="about.php"><b>About</b><img src="dropdown_arrow.svg" alt="Dropdown"></a>
                <ul>
                    <li><a href="contact.php"><b>Contact Us</b></a></li>
                </ul>
            </li>
        </ul>
    </div>
    
</div>