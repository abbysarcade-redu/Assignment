<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<?php $kiosk_order_preparedStatement->execute([$_GET['id']]);
$orders = $kiosk_order_preparedStatement->fetch();?>
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
            <a href="e-order.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <a href="order_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <h1 class="kiosk_title">Sale ID</h1>
        <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
        <hr>
        <h1 class="kiosk_title">Sale Number</h1>
        <p class="kiosk_content"><?php echo($orders['sale_number']) ?></p>
        <hr>
        <?php $sale_user_preparedStatement->execute([$orders['user_id']]);
        $user = $sale_user_preparedStatement->fetch();?>
        <h1 class="kiosk_title">User Name</h1>
        <p class="kiosk_content"><?php echo($user['user_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">User Email</h1>
        <p class="kiosk_content"><?php echo($user['user_email']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Date</h1>
        <p class="kiosk_content"><?php echo($orders['order_date']) ?></p>
        <hr>
        <h1 class="kiosk_title">Payment Reference</h1>
        <p class="kiosk_content"><?php echo($orders['payment_ref']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Value</h1>
        <p class="kiosk_content">£<?php echo($orders['order_value']) ?></p>
        <hr>
        <h1 class="kiosk_title">Order Status</h1>
        <p class="kiosk_content"><?php echo($orders['order_status']) ?></p>
        <hr>
        <h1 class="kiosk_title">Delivery Reference</h1>
        <p class="kiosk_content"><?php echo($orders['delivery_ref']) ?></p>
    </div>
    <div class="buffer-space"></div>
</div>
