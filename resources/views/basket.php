<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css">
    <title>Game On</title>
</head>
<body>
<!---NAVBAR --->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="Style/images/Untitled design.png" alt="Game On" width="80"></a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact%20page.php">Contact</a>
            </li>
            <li>
                <input class="search-form" type="text" placeholder="Search..">
            </li>
            <li class="nav-item img">
                <a class="img" href="#">
                    <img id="accountImage" srC="Style/images/Basket.png" alt="Basket" width="40" height="40">
                </a>
            </li>
            <li class="nav-item img">
                <a class="img" href="#">
                    <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="basket-page">
    <div class="hero-image">
        <img src="Style/images/basket-banner.png" class="hero">
    </div>
    <div class="content-column">
        <h1 class="is-white">Your Shopping Basket</h1>
    </div>
    <div class="content-column">
        <a class="right-align yellow-btn" href="checkout.php">Checkout Securely</a>
    </div>
    <hr>
    <div class="basket-storage">
        <div class="basket-item">
            <img src="Style/images/miles-morales.png" class="top-games-img">
        </div>
        <div class="basket-item">
            <p class="top-games-txt">Miles Morales</p>
        </div>
        <button class="button-trans">-</button>
        <input class="input-trans" type="text" value="1">
        <button class="button-trans">+</button>
        <div class="basket-item">
            <p class="top-games-txt">£80.00</p>
        </div>
        <button class="button-trans">x</button>
    </div>
    <hr>
    <div class="basket-total">
        <div class="basket-item">
            <p class="basket-txt">Basket Subtotal:</p>
        </div>
        <div class="basket-item">
            <p class="basket-txt">£80.00</p>
        </div>
    </div>
    <hr>
    <div class="basket-total>">
        <div>
            <a class="button-pink" href="products.php">Continue Shopping</a>
        </div>
        <div>
            <a class="yellow-btn" href="checkout.php">Checkout Securely</a>
        </div>
    </div>
</div>
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
        <a class="footer-info-link" href="useful%20links.php">Useful Links</a>
        <a class="footer-info-link" href="Search.php">Search Page</a>
    </div>
    <div class="footer-column">
        <h1 class="footer-pop-title">Popular Consoles</h1>
        <p class="footer-pop-link">Playstation</p>
        <p class="footer-pop-link">Xbox</p>
        <p class="footer-pop-link">Switch</p>
        <p class="footer-pop-link-final">PC</p>
    </div>
</div>

</body>
</html>
