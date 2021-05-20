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
            <a href="v_orders.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <a href="order_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <form action="order_edit.php?id=<?php echo($_GET['id']) ?>" method="post">
            <h1 class="kiosk_title">Sale ID</h1>
            <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
            <hr>
            <h1 class="kiosk_title">Sale Number</h1>
            <p class="kiosk_content"><?php echo($orders['sale_number']) ?></p>
            <hr>
            <?php $sale_user_preparedStatement->execute([$orders['user_id']]);
            $user = $sale_user_preparedStatement->fetch();?>
            <div>
                <a href="e_users.php?id=<?php echo($orders['user_id']) ?>">
                    <img class="cont_icon" src="../Style/images/user_kiosk.png">
                </a>
            </div>
            <h1 class="kiosk_title">User Name</h1>
            <p class="kiosk_content"><?php echo($user['user_name']) ?></p>
            <hr>
            <h1 class="kiosk_title">User Email</h1>
            <p class="kiosk_content"><?php echo($user['user_email']) ?></p>
            <hr>
            <h1 class="kiosk_title">Order Date</h1>
            <input type="datetime-local" name="date" class="kiosk_input" value="<?php echo($orders['order_date']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Payment Reference</h1>
            <p class="kiosk_content"><?php echo($orders['payment_ref']) ?></p>
            <hr>
            <h1 class="kiosk_title">Order Value</h1>
            <input name="value" class="kiosk_input" value="£<?php echo($orders['order_value']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Order Status</h1>
            <input name="status" class="kiosk_input" value="<?php echo($orders['order_status']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Delivery Reference</h1>
            <p class="kiosk_content"><?php echo($orders['delivery_ref']) ?></p>
            <hr>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
