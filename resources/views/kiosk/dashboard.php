<!-- include the nav bar used for the kiosk -->

<?php include("layout/kiosk_nav.php") ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<head>
    <!-- Add a name to the tab shown on the browser-->
    <title>Dashboard - Kiosk</title>
</head>
<!-- container for the content page -->
<div class="content-page">
    <div class="buffer-space"></div>
    <div class="dash">
        <a class="dashboard" href="products.php">
            <div class="dash_bubble">
                <p>Total Products:</p>
                <!-- fetches the details of the product count query in db.php -->
                <?php $prod = $products_count_preparedStatement->fetch() ?>
                <!-- shows the returned data from the query in HTML -->
                <h1 class="central_dash"><?php print_r($prod['count(*)']) ?></h1>
            </div>
        </a>
        <a class="dashboard" href="order.php">
            <div class="dash_bubble">
                <p>Total Orders:</p>
                <!-- fetches the details of the order count query in db.php -->
                <?php $ord = $orders_count_preparedStatement->fetch() ?>
                <!-- shows the returned data from the query in HTML -->
                <h1 class="central_dash"><?php print_r($ord['count(*)']) ?></h1>
            </div>
        </a>
    </div>
    <div class="dash">
        <a class="dashboard" href="users.php">
            <div class="dash_bubble">
                <p>Total Users:</p>
                <!-- fetches the details of the order count query in db.php -->
                <?php $use = $users_count_preparedStatement->fetch() ?>
                <!-- shows the returned data from the query in HTML -->
                <h1 class="central_dash"><?php print_r($use['count(*)']) ?></h1>
            </div>
        </a>
        <a class="dashboard" href="links.php">
            <div class="dash_bubble">
                <p>Total Useful Links:</p>
                <!-- fetches the details of the order count query in db.php -->
                <?php $link = $links_count_preparedStatement->fetch() ?>
                <!-- shows the returned data from the query in HTML -->
                <h1 class="central_dash"><?php print_r($link['count(*)']) ?></h1>
            </div>
        </a>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
