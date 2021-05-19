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
        <p class="kiosk_content"></p>
    </div>
    <div class="buffer-space"></div>
</div>
