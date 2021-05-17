<!DOCTYPE html>

<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<?php include ("layout/header.php"); ?>
<header>
    <title>Orders</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/your%20orders.png" class="hero">
    </div>
    <div>
        <?php $past_orders_preparedStatement->execute([$_SESSION['user_id']]);
        $row = $past_orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'orders');
        foreach ($row as $users): ?>
        <div>
            <div>
                <a class="order_title">Order Number:</a>
                <a class="order_details"><?php echo($users->sale_number) ?></a>
            </div>
            <div>
                <a class="order_title">Order Date:</a>
                <a class="order_details"><?php echo($users->order_date) ?></a>
            </div>
            <div>
                <a class="order_title">Order Value:</a>
                <a class="order_details"><?php echo($users->order_value) ?></a>
            </div>
            <hr>

        </div>
        <?php endforeach; ?>
    </div>
</div>


<?php include ("layout/footer.php"); ?>
