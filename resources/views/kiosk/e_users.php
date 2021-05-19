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
            <a href="v_users.php?id=<?php echo($_GET['id']) ?>">
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
            <h1 class="kiosk_title">Orders</h1>
            <p class="kiosk_content"></p>
            <hr>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
