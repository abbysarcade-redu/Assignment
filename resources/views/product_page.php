<?php include ("../db.php"); ?>
<?php $SKU = $_GET['sku'] ?>
<?php $passing_sku = str_split($SKU, 12) ?>
<?php $game_preparedStatement->execute($passing_sku); ?>

<?php class prod_ret {
    public $product_name;
    public $product_image;
    public $product_description;
    public $slug;
} ?>
<?php $game_preparedStatement->setFetchMode(PDO::FETCH_CLASS, 'prod_ret'); ?>
<?php $product_ret= ($game_preparedStatement->fetch()); ?>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Game On</title>
</head>
<body>
<!---NAVBAR --->
<nav class="header">
    <a href="Homepage.php" class="logo"><img src="Style/images/Untitled design.png" alt="Game On" width="80"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li class="nav-item active">
            <a class="nav-link " href="about.php">About</a>
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
            </a>
        </li>
        <li class="img right">
            <a class="img" href="#">
                <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
            </a>
        </li>
        <li class="search-bar right">
            <input type="text" class="search_input" aria-label="search" placeholder="Search..">
            <button class="search_button" aria-label="submit search"><i class="fas fa-search"></i></button>
        </li>
        <li class="buffer"></li>
    </ul>
</nav>
<section class="prod-container">
    <div class="prod-box">
        <div class="container-prod">
            <div class="prod-columns">
                <div class="prod-column">
                    <img class="prod-img" src="<?php echo($product_ret->product_image) ?>">
                </div>
                <div class="purchase-column">
                    <div id="purchase_form"></div>
                    <form class="purchase" method="post">
                        <input type="hidden" name="brand" required="" value="<?php echo($passing_sku) ?>">
                        <div style="display: block;">
                            <p class="prod-title"><?php echo($product_ret->product_name) ?></p>
                            <label class="prod-label">Choose your console</label>
                            <div class="console-control">
                                <?php if($product_ret->playstation == 1): ?>
                                <input class="con-rad-cont" id="console[playstation]" type="radio" name="console">
                                <label class="console-button" for="console[playstation]">
                                    Playstation
                                </label>
                                <?php endif; ?>
                                <?php if($product_ret->xbox == 1): ?>
                                    <input class="con-rad-cont" id="console[xbox]" type="radio" name="console">
                                    <label class="console-button" for="console[xbox]">
                                        Xbox
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->nintendo == 1): ?>
                                    <input class="con-rad-cont" id="console[nintendo]" type="radio" name="console">
                                    <label class="console-button" for="console[nintendo]">
                                        Nintendo
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->pc == 1): ?>
                                    <input class="con-rad-cont" id="console[pc]" type="radio" name="console">
                                    <label class="console-button" for="console[pc]">
                                        PC
                                    </label>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p class="price">£<?php echo($product_ret->product_cost) ?></p>
                            </div>
                        </div>
                        <div class="submit_button_control">
                            <button class="submit_button">
                                Add to basket
                            </button>
                            <button class="submit_button">
                                Buy Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="prod-info-container">
    <div class="prod-in-container">
        <div class="prod-info-columns">
            <div class="prod-info-column">
                <h2><?php echo($product_ret->product_name) ?></h2>
                <div class="product-content">
                    <?php echo nl2br($product_ret->product_description) ?>
                </div>
            </div>
            <div class="prod-side-container">
                <div class="panel">
                    <p class="panel-heading">Delivery</p>

                    <div class="panel-block">
                        Orders will be dispatched to the delivery address within 24 hours. Delivery expected within 48 hours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer">
    <div class="footer-column">
        <img src="Style/images/long-logo.png" class="footer-logo">
        <p class="footer-content">Thank you for choosing game-on.co.uk, we pride ourselves on delivering a fantastic selection of games.</p>
        <div>
            <img class="footer-social" src="Style/images/Facebook-logo.png">
            <img class="footer-social" src="Style/images/Twitter.png">
            <img class="footer-social" src="Style/images/Twitch.png">
        </div>
        <p class="footer-content">Copyright 2021 game-on.co.uk</p>
    </div>
    <div class="footer-column">
        <h1 class="footer-info-title">Information</h1>
        <a class="footer-info-link" href="about.php">About</a>
        <a class="footer-info-link" href="useful_links.php">Useful Links</a>
        <a class="footer-info-link" href="Search.php">Search Page</a>
    </div>
    <div class="footer-column">
        <h1 class="footer-pop-title">Popular Consoles</h1>
        <a class="footer-pop-link" href="playstation.php">Playstation</a>
        <a class="footer-pop-link" href="xbox.php">Xbox</a>
        <a class="footer-pop-link" href="nintendo.php">Nintendo</a>
        <a class="footer-pop-link-final" href="PC.php">PC</a>
    </div>
</div>

</body>
</html>
