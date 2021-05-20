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
        <form action="product_create.php" method="post">
            <h1 class="kiosk_title">Game Name</h1>
            <input name="name" class="kiosk_input" placeholder="Name of the Game" required/>
            <hr>
            <h1 class="kiosk_title">Description</h1>
            <textarea name="description" class="kiosk_textarea" placeholder="About the Game" required></textarea>
            <hr>
            <h1 class="kiosk_title">Cost</h1>
            <input name="cost" class="kiosk_input" placeholder="££££" required/>
            <hr>
            <h1 class="kiosk_title">Game of the Month</h1>
            <input name="game_of_month" class="kiosk_input" type="checkbox"/>
            <hr>
            <h1 class="kiosk_title">Stock</h1>
            <input name="available_stock" class="kiosk_input" placeholder="100" required/>
            <hr>
            <h1 class="kiosk_title">Consoles</h1>
            <label class="kiosk_content">Playstation</label>
            <input name="playstation" class="kiosk_input" value="" type="checkbox"/>
            <label class="kiosk_content">Xbox</label>
            <input name="xbox" class="kiosk_input" value="" type="checkbox"/>
            <label class="kiosk_content">Nintendo</label>
            <input name="nintendo" class="kiosk_input" value="" type="checkbox"/>
            <label class="kiosk_content">PC</label>
            <input name="pc" class="kiosk_input" value="" type="checkbox"/>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
