<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<?php $sale_user_preparedStatement->execute([$_GET['id']]);
$user = $sale_user_preparedStatement->fetch();?>
<!DOCTYPE html>
<header>
    <title> - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <a href="e_users.php?id=<?php print_r($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <a href="user_delete.php?id=<?php print_r($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <h1 class="kiosk_title">User ID</h1>
        <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
        <hr>
        <h1 class="kiosk_title">Customer Name</h1>
        <p class="kiosk_content"><?php echo($user['user_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">User Email</h1>
        <p class="kiosk_content"><?php echo($user['user_email']) ?></p>
        <hr>
        <h1 class="kiosk_title">Orders</h1>
        <div>
            <?php $past_orders_preparedStatement->execute([$_GET['id']]);
            $row = $past_orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'order');
            foreach ($row as $users): ?>
                <div class="order_container">
                    <div class="order_line">
                        <p class="order_title">Order Number:</p>
                        <p class="order_details"><?php echo($users->sale_number) ?></p>
                    </div>
                    <div class="order_line">
                        <p class="order_title">Order Date:</p>
                        <p class="order_details"><?php echo($users->order_date) ?></p>
                    </div>
                    <div class="order_line">
                        <p class="order_title">Order Value:</p>
                        <p class="order_details">£<?php echo($users->order_value) ?></p>
                    </div>
                    <a href="v_orders.php?id=<?php echo($users->sale_id)?>" class="yellow-btn">View Order</a>
                </div>
                <hr>
            <?php endforeach; ?>
            <div class="buffer-space"></div>
        </div>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
