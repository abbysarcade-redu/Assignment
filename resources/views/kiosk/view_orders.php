<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!-- execute the query from db.php using the id passed to the the page from the URL -->
<?php $kiosk_order_preparedStatement->execute([$_GET['id']]);
// fetch the data returned by the query
$orders = $kiosk_order_preparedStatement->fetch();?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title> - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <!-- using the id passed to the the page from the URL, pass the id to edit_orders -->
            <a href="edit_order.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <!-- using the id passed to the the page from the URL, pass the id to order_delete -->
            <a href="order_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <h1 class="kiosk_title">Sale ID</h1>
        <!-- Display the link id which was passed from the URL -->
        <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
        <hr>
        <h1 class="kiosk_title">Sale Number</h1>
        <!-- Display the sale number returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($orders['sale_number']) ?></p>
        <hr>
        <!-- execute the query from db.php using the user id returned from the query on line 8 -->
        <?php $sale_user_preparedStatement->execute([$orders['user_id']]);
        // fetch the data returned by the query
        $user = $sale_user_preparedStatement->fetch();?>
        <div>
            <!-- using the user id passed to the the page returned from from the query on line 8L, pass the id to order_delete -->
            <a href="view_users.php?id=<?php echo($orders['user_id']) ?>">
                <img class="cont_icon" src="../Style/images/user_kiosk.png">
            </a>
        </div>
        <h1 class="kiosk_title">User Name</h1>
        <!-- Display the user name returned from the query on line 48 -->
        <p class="kiosk_content"><?php echo($user['user_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">User Email</h1>
        <!-- Display the user email returned from the query on line 48 -->
        <p class="kiosk_content"><?php echo($user['user_email']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Date</h1>
        <!-- Display the order returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($orders['order_date']) ?></p>
        <hr>
        <h1 class="kiosk_title">Payment Reference</h1>
        <!-- Display the payment ref returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($orders['payment_ref']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Value</h1>
        <!-- Display the order value returned from the query on line 8 -->
        <p class="kiosk_content">£<?php echo($orders['order_value']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Status</h1>
        <!-- Display the order status returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($orders['order_status']) ?></p>
        <hr>
        <h1 class="kiosk_title">Delivery Reference</h1>
        <!-- Display the delivery ref returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($orders['delivery_ref']) ?></p>
    </div>
    <div class="buffer-space"></div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
