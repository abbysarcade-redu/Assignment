<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!-- execute the query from db.php using the id passed to the the page from the URL -->
<?php $sale_user_preparedStatement->execute([$_GET['id']]);
// fetch the data returned by the query
$user = $sale_user_preparedStatement->fetch();?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Edit User - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <!-- using the id passed to the the page from the URL, pass the id to view_users -->
            <a href="view_users.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <!-- using the id passed to the the page from the URL, pass the id to user_delete -->
            <a href="user_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <!-- To create a form. The inputs are used in sections where we would like the user to type in a response, all of these are required fields.
        There are some areas that show on here which are not sale data in the database and are associated to different tables. These cannot be edited in this view as it will encourage mistakes from the user.
        The action on here is to send to the order_edit file which takes the inputs and adds to the database using the post method.
        The id is also passed to the new page.-->
        <form action="user_edit.php?id=<?php echo($_GET['id']) ?>" method="post">
            <hr>
            <h1 class="kiosk_title">User Id</h1>
            <!-- Display the link id which was passed from the URL -->
            <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
            <hr>
            <h1 class="kiosk_title">Customer Name</h1>
            <!-- Display the user name returned from the query on line 8 -->
            <input name="name" class="kiosk_input" value="<?php echo($user['user_name']) ?>" required/>
            <hr>
            <h1 class="kiosk_title">User Email</h1>
            <!-- Display the user email returned from the query on line 48 -->
            <input name="email" class="kiosk_input" value="<?php echo($user['user_email']) ?>" required/>
            <hr>
            <h1 class="kiosk_title">Access Type</h1>
            <!-- Using an if statement to check if the access type value returned from the query on line 8 is equal to 2 -->
            <?php if($user['access_type'] == 2): ?>
                <!-- If yes, display the access type check box as checked-->
                <input name="admin" class="kiosk_input" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the pc check box as unchecked-->
                <input name="admin" class="kiosk_input" type="checkbox"/>
            <?php endif; ?>
            <hr>
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
            <h1 class="kiosk_title">Orders</h1>
            <p class="kiosk_content"></p>
            <div>
                <!-- execute the query from db.php using the id passed to the the page from the URL -->
                <?php $past_orders_preparedStatement->execute([$_GET['id']]);
                // fetch the data returned by the query using the class order
                $row = $past_orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'order');
                // iterate through each item in the array and return the below HTML each time
                foreach ($row as $users): ?>
                    <div class="order_container">
                        <div class="order_line">
                            <p class="order_title">Order Number:</p>
                            <!-- Display the sale number returned from the query on line 69 -->
                            <p class="order_details"><?php echo($users->sale_number) ?></p>
                        </div>
                        <div class="order_line">
                            <p class="order_title">Order Date:</p>
                            <!-- Display the order date returned from the query on line 69 -->
                            <p class="order_details"><?php echo($users->order_date) ?></p>
                        </div>
                        <div class="order_line">
                            <p class="order_title">Order Value:</p>
                            <!-- Display the order value returned from the query on line 69 -->
                            <p class="order_details">£<?php echo($users->order_value) ?></p>
                        </div>
                        <!-- using the sale id returned from the query on line 69, pass the id to edit order -->
                        <a href="edit_order.php?id=<?php echo($users->sale_id)?>" class="yellow-btn">Edit Order</a>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>

    </div>

</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
