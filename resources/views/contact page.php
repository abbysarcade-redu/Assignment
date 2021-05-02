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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>
<body>
<!---NAVBAR --->
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
<div class="nav-buffer">

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/contact-us-banner.png" class="hero">
    </div>
    <div class="message-content-block">
        <h1>Send Us a Message!</h1>
        <p class="message-content">If you have any queries or question, please do not hesitate to send us a message using the form below and a member of our customer service team will get back in touch as soon as possible. We look forward to speaking to you. </p>
    </div>
    <div class="contact-page-layout">
        <form action="contact_send.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="Full Name*" name="customer_name" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Email Address*" name="customer_email" required>
                </div>
            </div>
            <div class="form-group">
                <input class="form-style" placeholder="Contact Number" name="customer_phone_number">
            </div>
            <div class="form-group">
                <textarea class="form-style-txt" rows="4" placeholder="Message*" name="customer_message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="contact-page-layout">
        <div>
            <h1 class="is-blue"> Where to Find Us.</h1>
            <p class="is-blue">The David Coldman Informatics Centre,</p>
            <p class="is-blue">Monkwearmouth,</p>
            <p class="is-blue">Sunderland,</p>
            <p class="is-blue">SR6 0DD</p>

            <p class="is-blue">Located in <a class="is-pink">The University of Sunderland.</a></p>
        </div>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=SR6%200DD&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:auto;width:auto;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;border-radius: 20px;}</style></div></div>    </div>
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

