<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Add Products - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>
<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <!-- To create a form. The inputs are used in sections where we would like the user to type in a response, all of these are required fields.
        The action on here is to send to the product_create file which takes the inputs and adds to the database using the post method. -->
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
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
