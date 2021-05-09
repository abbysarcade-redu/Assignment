<?php
if(!isset($_SESSION)) {
    session_start();
} ?>

<script src="../js/add_basket_function.js">
    document.getElementById('basket').innerText = basket_length;
</script>
<nav class="header">
    <a href="Homepage.php" class="logo"><img src="Style/images/Untitled design.png" alt="Game On" width="80"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li class="nav-item active">
            <a class="nav-link-active " href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact%20page.php">Contact</a>
        </li>
        <li class="img right">
            <a class="img" href="basket.php">
                <img id="accountImage" srC="Style/images/Basket.png" alt="Basket" width="40" height="40">
                <p class="basket-number" id="basket"><?php echo (count($_SESSION['basket'])) ?></p>
            </a>
        </li>
        <li class="img right">
            <a class="img dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="create%20account.php">Create an account</a>
            </ul>
        </li>
        <script src="../js/nav_dropdown.js"></script>
        <li class="search-bar right">
            <input type="text" class="search_input" aria-label="search" placeholder="Search..">
            <button class="search_button" aria-label="submit search"><i class="fas fa-search"></i></button>
        </li>
        <li class="buffer"></li>
    </ul>
</nav>


