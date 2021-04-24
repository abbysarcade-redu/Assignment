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
                <a class="nav-link" href="#">Products</a>
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
<div class="contact-page">
    <div class="hero-image">
        <img src="Style/images/useful-links-banner.png" class="hero">
    </div>
    <div class="table-wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <div class="btn-group" data-goggle="buttons">
                        <label class="btn btn-info active">
                            <input type="radio" name="status" value="all" checked="checked">All
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="status" value="active">Javascript
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" name="status" value="active">HTML
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">SQL
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">CSS
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">PHP
                        </label>
                    </div>
                </div>
            </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Website</th>
                <th>Webpage</th>
                <th>Author</th>
                <th>Language</th>
                <th>Tags</th>
                <th>Visit</th>
            </tr>
            </thead>
            <tbody>
                <tr lan="Javascript">
                    <td>Soeng Souy</td>
                    <td>Bootstrap Data Table with Filter Row Feature | CSS JAVASCRIPT </td>
                    <td>Soeng Souy</td>
                    <td>Javascript</td>
                    <td>Table, Filter</td>
                    <td><a href="https://www.soengsouy.com/2020/04/bootstrap-data-table-with-filter-row.html?m=1" target="_blank" class="btn btn-sm manage">Click Me</a></td>
                </tr>
                <tr lang="HTML">
                    <td>The Site Wizard</td>
                    <td>How to Make Links Open in a New Window or Tab</td>
                    <td>Unknown</td>
                    <td>HTML</td>
                    <td>New Tab</td>
                    <td><a href="https://www.thesitewizard.com/html-tutorial/open-links-in-new-window-or-tab.shtml" target="_blank" class="btn btn-sm manage">Click Me</a></td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="../js/ProductSearch.js"    ></script>
<div class="buffer-space">

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
        <p class="footer-info-link-final">Search Page</p>
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
