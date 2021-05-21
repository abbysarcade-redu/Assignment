<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Orders - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <a class="button-pink-b">Add Order</a>
    <div class="table-wrapper">
        <!-- create the table -->
        <table class="table table-hover">
            <thead class="table_header">
            <!-- table headers -->
            <tr class="table_header">
                <th>Sale ID</th>
                <th>Sale Number</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Order Value</th>
                <th></th>
            </tr>
            </thead>
            <!-- table entries -->
            <tbody id="link_table">
            <!-- fetch the return from the query from db.php query. Using fetchAll to access all of the items returned, using a class to call items. -->
            <?php $row = $orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'order');
            //to iterate through the array returned from the query above.
            foreach ($row as $order):
                //Execute the statement from db.php. This statement is used to return the elements stored in the users table of the database
                $sale_user_preparedStatement->execute([$order->user_id]);
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $user_details = $sale_user_preparedStatement->fetch();?>
                <!-- create a table row-->
                <tr class="table filterTr" >
                    <!-- Display the sale id returned from the query on line 34 -->
                    <td><?php echo($order->sale_id) ?></td>
                    <!-- Display the sale number returned from the query on line 34 -->
                    <td><?php echo($order->sale_number) ?></td>
                    <td>
                        <!-- Display the user name returned from the query on line 38 -->
                        <a><?php echo ($user_details['user_name']) ?></a>
                        <!-- Display the user email returned from the query on line 38 -->
                        <a><?php echo ($user_details['user_email']) ?></a>
                    </td>
                    <!-- Display the order date returned from the query on line 34 -->
                    <td><?php echo($order->order_date) ?></td>
                    <!-- Display the order value returned from the query on line 34 -->
                    <td><?php echo($order->order_value) ?></td>
                    <td>
                        <!-- using the id returned from the query on line 34, pass the id to view_orders-->
                        <a href="view_orders.php?id=<?php echo($order->sale_id) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <!-- using the id returned from the query on line 34, pass the id to edit_order-->
                        <a href="edit_order.php?id=<?php echo($order->sale_id) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <!-- using the id returned from the query on line 34, pass the id to order_delete-->
                        <a href="order_delete.php?id=<?php echo($order->sale_id) ?>">
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
