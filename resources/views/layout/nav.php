<!DOCTYPE html>
<!-- check if session is started -->
<?php
if(!isset($_SESSION)) {
    session_start();
}

// check if basket has a value
if(!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = array();
}
    ?>

<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../tools/db.php"); ?>
<!-- include headers for design elements -->
<?php include ("layout/header.php"); ?>
<!-- include java script for the account drop down -->
<script src="../js/navDropdown.js"></script>
<!-- include java script for the search drop down and search function-->
<script src="../js/navSearch.js"></script>

<!-- create the nav container -->
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
            <a class="nav-link" href="contact_page.php">Contact</a>
        </li>
        <li class="img right">
            <a class="img" href="basket.php">
                <img id="accountImage" srC="Style/images/Basket.png" alt="Basket" width="40" height="40">
                <!-- check if the basket is empty and if not then show the basket counter-->
                <?php if((count($_SESSION['basket'])) != 0): ?>
                <p class="basket-number" id="basket"><?php echo (count($_SESSION['basket'])) ?></p>
                <?php endif; ?>
            </a>
        </li>
        <li class="img right">
            <div>
                <a class="img dropdown-toggle" onclick="showAccountFunction()">
                    <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
                </a>
                <!-- check if a user is logged in and if they are show the account related drop down-->
                <?php if(isset($_SESSION['user_id'])): ?>
                <div class="account_drop hide" id="account_drop">
                    <button class="close" onclick="hideAccountFunction()">X</button>
                    <a href="account.php">Account</a>
                    <hr>
                    <a href="past_orders.php?id=<?php echo($_SESSION['user_id']); ?>">Orders</a>
                    <hr>
                    <a href="logout.php">Logout</a>
                    <!-- check if the user is an admin and if they are allow access to the dashboard -->
                    <?php if($_SESSION['access_type'] == 2): ?>
                        <hr>
                        <a href="kiosk/dashboard.php">Dashboard</a>
                    <?php endif; ?>
                </div>
                <!-- if the user is not logged in, allow them to log in or make an account -->
                <?php else: ?>
                <div class="account_drop hide" id="account_drop">
                    <button class="close" onclick="hideAccountFunction()">X</button>
                    <a href="login.php">Login</a>
                    <hr>
                    <a href="create%20account.php">Create Account</a>
                </div>
                <?php endif; ?>
            </div>
        </li>
            <div class="search-input">
                <div class="search-bar right">
                    <input type="text" class="search_input" id="nav_search" placeholder="Search.." onclick="resultsFunction()" onkeyup="resultFilterFunction()">
                    <button class="search_button" aria-label="submit search"><i class="fas fa-search"></i></button>
                </div>
                    <div class="nav_search_container">
                        <ul class="gift-card-search-results hide" id="search_container">
                            <button class="close" onclick="hideResultsFunction()">X</button>
                            <!-- run the query from db.php to get all the games using a class -->
                            <?php $row = $games_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "game");
                            //iterate through the array from the query above
                            foreach($row as $game): ?>
                                <li>
                                    <hr>
                                    <div class="search-item">
                                        <!-- pass the sku from the query in line 89 to the product page -->
                                        <a class="search-display" href="product_page.php?sku=<?=$game->product_sku;?>">
                                            <!-- display the image returned from the query in line 89 -->
                                            <img class="search-img" src="<?php echo($game->product_image) ?>">
                                            <!-- display the name returned from the query in line 89 -->
                                            <p class="search-txt"><?php echo($game->product_name) ?></p>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        </li>
                    </div>
            </div>
        <li class="buffer"></li>
    </ul>
</nav>



