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
<nav class="header">
    <a href="" class="logo"><img src="Style/images/Untitled design.png" alt="Game On" width="80"></a>
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
        <li>
            <input class="search-form" type="text" placeholder="Search..">
        </li>
        <li class="img">
            <a class="img" href="basket.php">
                <img id="accountImage" srC="Style/images/Basket.png" alt="Basket" width="40" height="40">
            </a>
        </li>
        <li class="img">
            <a class="img" href="#">
                <img id="accountImage" src="Style/images/Account.png" alt="Account" width="40" height="40">
            </a>
        </li>
    </ul>
</nav>
<div class="nav-buffer">

</div>
<div class="home-page">
    <div class="hero-image">
        <img src="Style/images/Homepage-banner.png" class="hero">
    </div>
    <div class="pop-console">
        <h1>Popular Consoles</h1>
        <div class="pop-console-container">
            <img src="Style/images/ps-logo.png" class="pop-console-img" href="about.php">
            <img src="Style/images/Xbox-logo.png" class="pop-console-img">
            <img src="Style/images/nintendo-logo.png" class="pop-console-img">
            <img src="Style/images/computer.png" class="pop-console-img">
        </div>
    </div>
    <div class="game-of-month">
        <h1> Game of the month</h1>
        <div>
            <img src="Style/images/game-of-month.jpg" class="game-of-month-img">
        </div>
    </div>
    <div class="top-games">
        <h1>Top Games</h1>
        <div>
            <div class="top-games-entry">
                <img src="Style/images/miles-morales.png" class="top-games-img">
                <p class="top-games-txt">Miles Morales</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/fifa.png" class="top-games-img">
                <p class="top-games-txt">Fifa</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/Cyberpunk.png" class="top-games-img">
                <p class="top-games-txt">Cyberpunk</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/hitman.png" class="top-games-img">
                <p class="top-games-txt">Hitman 3</p>
            </div>
        </div>
        <div>
            <div class="top-games-entry">
                <img src="Style/images/boarderlands.png" class="top-games-img">
                <p class="top-games-txt">Boarderlands 3</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/Reddead.png" class="top-games-img">
                <p class="top-games-txt">Red Dead Redemption</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/god-of-war.png" class="top-games-img">
                <p class="top-games-txt">God Of War</p>
            </div>
            <div class="top-games-entry">
                <img src="Style/images/valhalla.png" class="top-games-img">
                <p class="top-games-txt">Valhalla</p>
            </div>
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


