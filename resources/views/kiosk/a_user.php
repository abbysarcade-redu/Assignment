<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
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
        <form action="user_create.php" method="post">
            <hr>
            <h1 class="kiosk_title">Customer Name</h1>
            <input name="name" class="kiosk_input" placeholder="John Doe" required/>
            <hr>
            <h1 class="kiosk_title">User Email</h1>
            <input name="email" class="kiosk_input" placeholder="account@game-on.co.uk" required/>
            <hr>
            <h1 class="kiosk_title">Site Admin</h1>
            <input name="admin" class="kiosk_input" type="checkbox"/>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
