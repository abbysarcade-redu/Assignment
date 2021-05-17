<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = array();
}
    ?>
<?php include ("../tools/class_controller.php"); ?>
<?php include ("../tools/db.php"); ?>

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
                <?php if((count($_SESSION['basket'])) != 0): ?>
                <p class="basket-number" id="basket"><?php echo (count($_SESSION['basket'])) ?></p>
                <?php endif; ?>
            </a>
        </li>
        <li class="img right">
            <?php if(!isset($_SESSION['user_id'])): ?>
            <a class="img dropdown-toggle" href="login.php">
            <?php else: ?>
            <a class="img dropdown-toggle" href="account.php">
            <?php endif; ?>
                <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
            </a>
        </li>
            <div class="search-input">
                <div class="search-bar right">
                    <input type="text" class="search_input" aria-label="search" placeholder="Search.." onkeyup="search_function()" required>
                    <button class="search_button" aria-label="submit search"><i class="fas fa-search"></i></button>
                </div>
                    <ul class="gift-card-search-results" id="search_container">
                        <?php $row = $games_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "game");
                        foreach($row as $game): ?>
                            <li>
                                <div class="search-item">
                                    <a class="search-display" href="product_page.php?sku=<?=$game->product_sku;?>">
                                        <img class="search-img" src="<?php echo($game->product_image) ?>">
                                        <p class="search-txt"><?php echo($game->product_name) ?></p>
                                    </a>
                                </div>
                            </li>
                        <hr>
                         <?php endforeach; ?>
                    </ul>
                </li>
            </div>
        <li class="buffer"></li>
    </ul>
</nav>



