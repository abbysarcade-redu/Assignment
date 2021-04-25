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
                    <div class="dropdown">
                        <img id="accountImage" srC="Style/images/Basket.png" alt="Basket" width="40" height="40">
                    </div>
                </a>
            </li>
            <li class="nav-item drop img">
                <a class="img" href="#">
                    <img class="dropbtn" id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40"><i class="fa fa-caret-down"></i>
                    <div class="dropdown-content">
                        <ul>
                            <li><a class="nav-link" href="#">Log In</a></li>
                            <li><a class="nav-link" href="#">Sign Up</a></li>
                        </ul>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
<script>
    document.querySelector(".drop a").addEventListener("click", function (){this.classList.toggle("active");
    });
</script>
<div class="contact-page">
    <div class="hero-image">
        <img src="Style/images/Checkout-successful-banner.png" class="hero">
    </div>
    <h1 class="is-white">Congratulations on your Checkout!</h1>
    <div class="checkout-container-left">
        <p class="is-white-left">Order Number: *******</p>
        <p class="is-white-left">Name: *******</p>
        <p class="is-white-left">Email Address: *******</p>
        <p class="is-white-left">Phone Number: *******</p>
        <p class="is-white-left">Card Number: *******</p>
    </div>
    <div class="checkout-container-right">
        <img src="Style/images/celebrate.png" class="hero">
    </div>
    <hr>
    <div class="basket-storage">
        <div class="basket-item">
            <img src="Style/images/miles-morales.png" class="top-games-img">
        </div>
        <div class="basket-item">
            <p class="top-games-txt">Miles Morales</p>
        </div>
        <div class="basket-item">
            <p class="top-games-txt">x1</p>
        </div>
        <div class="basket-item">
            <p class="top-games-txt">£80.00</p>
        </div>
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
    <div class="buffer-space"></div>
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


