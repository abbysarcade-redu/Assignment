<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
    session_start();
} ?>
<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<div class="kiosk_nav">
    <ul class="menu">
        <a href="dashboard.php" class="logo"><img src="../Style/images/Untitled design.png" alt="Game On" width="80"></a>
        <li class="nav-item">
            <a class="k_nav-link">Brands</a>
        </li>
        <li class="nav-item">
            <a class="k_nav-link">Orders</a>
        </li>
        <li class="nav-item">
            <a href="users.php" class="k_nav-link">Users</a>
        </li>
        <li class="nav-item">
            <a href="links.php" class="k_nav-link">Useful Links</a>
        </li>
        <li class="nav-item">
            <a class="k_nav-link">Logout</a>
        </li>
    </ul>

</div>
