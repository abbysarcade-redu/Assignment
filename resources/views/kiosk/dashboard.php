<?php include("layout/kiosk_nav.php") ?>
<?php include ("../../tools/db.php"); ?>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<div class="buffer-space"></div>
<div class="content-page">
    <div class="dash">
        <a href="products.php">
            <div class="dash_bubble">
                <a>Total Products:</a>
                <?php $prod = $products_count_preparedStatement->fetch() ?>
                <h1 class="central_dash"><?php print_r($prod['count(*)']) ?></h1>
            </div>
        </a>
        <a href="order.php">
            <div class="dash_bubble">
                <a>Total Orders:</a>
                <?php $ord = $orders_count_preparedStatement->fetch() ?>
                <h1 class="central_dash"><?php print_r($ord['count(*)']) ?></h1>
            </div>
        </a>
    </div>
    <div class="dash">
        <a href="users.php">
            <div class="dash_bubble">
                <a>Total Users:</a>
                <?php $use = $users_count_preparedStatement->fetch() ?>
                <h1 class="central_dash"><?php print_r($use['count(*)']) ?></h1>
            </div>
        </a>
        <a href="links.php">
            <div class="dash_bubble">
                <a>Total Useful Links:</a>
                <?php $link = $links_count_preparedStatement->fetch() ?>
                <h1 class="central_dash"><?php print_r($link['count(*)']) ?></h1>
            </div>
        </a>
    </div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
