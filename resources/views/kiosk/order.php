



<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <title>Orders - Kiosk</title>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>

<div class="content-page">
    <a class="button-pink-b">Add Order</a>
    <div class="table-wrapper">
        <table class="table table-hover">
            <thead class="table_header">
            <tr class="table_header">
                <th>Sale ID</th>
                <th>Sale Number</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Order Value</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="link_table">
            <?php $row = $orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'order');
            foreach ($row as $order):
                $sale_user_preparedStatement->execute([$order->user_id]);
                $user_details = $sale_user_preparedStatement->fetch();?>
                <tr class="table filterTr" >
                    <td><?php echo($order->sale_id) ?></td>
                    <td><?php echo($order->sale_number) ?></td>
                    <td>
                        <a><?php echo ($user_details['user_name']) ?></a>
                        <a><?php echo ($user_details['user_email']) ?></a>
                    </td>
                    <td><?php echo($order->order_date) ?></td>
                    <td><?php echo($order->order_value) ?></td>
                    <td>
                        <a>
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <a>
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
<div class="buffer-space"></div>
