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
            <a href="view_users.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <a href="user_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <form action="user_edit.php?id=<?php echo($_GET['id']) ?>" method="post">
            <hr>
            <h1 class="kiosk_title">User Id</h1>
            <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
            <hr>
            <h1 class="kiosk_title">Customer Name</h1>
            <input name="name" class="kiosk_input" value="<?php echo($user['user_name']) ?>"/>
            <hr>
            <h1 class="kiosk_title">User Email</h1>
            <input name="email" class="kiosk_input" value="<?php echo($user['user_email']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Access Type</h1>
            <?php if($user['access_type'] == 2): ?>
                <input name="admin" class="kiosk_input" type="checkbox" checked/>
            <?php else: ?>
                <input name="admin" class="kiosk_input" type="checkbox"/>
            <?php endif; ?>
            <hr>
            <button type="submit">Save</button>
        </form>
            <h1 class="kiosk_title">Orders</h1>
            <p class="kiosk_content"></p>
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
                        <a href="edit_order.php?id=<?php echo($users->sale_id)?>" class="yellow-btn">Edit Order</a>
                    </div>
                    <hr>
                <?php endforeach; ?>

    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
