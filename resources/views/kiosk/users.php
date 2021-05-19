<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <title>Useful Links - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>

<div class="content-page">
    <a class="button-pink-b" href="a_user.php">Add User</a>
    <div class="table-wrapper">
        <table class="table table-hover">
            <thead class="table_header">
            <tr class="table_header">
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Access</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="link_table">
            <?php $row = $users_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'users');
            foreach ($row as $users): ?>
                <tr class="table filterTr" >
                    <td><?php echo($users->user_id) ?></td>
                    <td><?php echo($users->user_name) ?></td>
                    <td><?php echo($users->user_email) ?></td>
                    <?php if($users->access_type == 1): ?>
                    <td>Customer</td>
                    <?php else: ?>
                    <td>Admin</td>
                    <?php endif; ?>
                    <td>
                        <a href="v_users.php?id=<?php echo($users->user_id) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <a href="e_users.php?id=<?php echo($users->user_id) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <a>
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
