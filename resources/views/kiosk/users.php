<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Useful Links - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <a class="button-pink-b" href="add_user.php">Add User</a>
    <div class="table-wrapper">
        <!-- create the table -->
        <table class="table table-hover">
            <thead class="table_header">
            <!-- table headers -->
            <tr class="table_header">
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Access</th>
                <th></th>
            </tr>
            </thead>
            <!-- table entries -->
            <tbody id="link_table">
            <!-- fetch the return from the query from db.php query. Using fetchAll to access all of the items returned, using a class to call items. -->
            <?php $row = $users_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'users');
            //to iterate through the array returned from the query above.
            foreach ($row as $users): ?>
                <!-- create a table row -->
                <tr class="table filterTr" >
                    <!-- Display the user id returned from the query on line 33 -->
                    <td><?php echo($users->user_id) ?></td>
                    <!-- Display the user name returned from the query on line 33 -->
                    <td><?php echo($users->user_name) ?></td>
                    <!-- Display the user email returned from the query on line 33 -->
                    <td><?php echo($users->user_email) ?></td>
                    <!-- check if the access type is equal to 1 -->
                    <?php if($users->access_type == 1): ?>
                    <!-- if yes show as a customer -->
                    <td>Customer</td>
                    <?php else: ?>
                    <!-- if no, show as an admin -->
                    <td>Admin</td>
                    <?php endif; ?>
                    <td>
                        <!-- using the id returned from the query on line 33, pass the id to view_users -->
                        <a href="view_users.php?id=<?php echo($users->user_id) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <!-- using the id returned from the query on line 33, pass the id to edit_users -->
                        <a href="edit_users.php?id=<?php echo($users->user_id) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <!-- using the id returned from the query on line 33, pass the id to user_delete -->
                        <a href="user_delete.php?id=<?php echo($users->user_id) ?>">
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
