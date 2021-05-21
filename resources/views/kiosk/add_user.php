<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Add User - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>
<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <!-- To create a form. The inputs are used in sections where we would like the user to type in a response, all of these are required fields.
        The action on here is to send to the user_create file which takes the inputs and adds to the database using the post method. -->
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
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
