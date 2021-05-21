<!DOCTYPE html>
<?php
// check if the session is started
if(!isset($_SESSION)) {
    session_start();
} ?>

<!-- Pull in the style requirements -->
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
</head>

<!-- Kiosk Nav container -->
<div class="kiosk_nav">
    <ul class="menu">
        <a href="dashboard.php" class="logo"><img src="../Style/images/Untitled design.png" alt="Game On" width="80"></a>
        <li class="nav-item">
            <a href="products.php" class="k_nav-link">Products</a>
        </li>
        <li class="nav-item">
            <a href="order.php" class="k_nav-link">Orders</a>
        </li>
        <li class="nav-item">
            <a href="users.php" class="k_nav-link">Users</a>
        </li>
        <li class="nav-item">
            <a href="links.php" class="k_nav-link">Useful Links</a>
        </li>
        <li class="nav-item">
            <a href="../Homepage.php" class="k_nav-link">Back to site</a>
        </li>
        <li class="nav-item">
            <a href="../logout.php" class="k_nav-link">Logout</a>
        </li>
    </ul>

</div>
