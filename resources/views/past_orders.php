<!DOCTYPE html>

<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<?php include ("layout/header.php"); ?>
<header>
    <title>Orders</title>
</header>
<body>
<?php include ("layout/nav.php");
print_r($_GET['id']);?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/your%20orders.png" class="hero">
    </div>
    <div class="buffer-space"></div>
    <div>
        <!-- get all the past orders for a user -->
        <?php $past_orders_preparedStatement->execute([$_GET['id']]);
        $row = $past_orders_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'order');
        foreach ($row as $users): ?>
        <div class="order_container">
            <div class="order_line">
                <p class="order_title">Order Number:</p>
                <p class="order_details"><?php echo($users->sale_number) ?></p>
            </div>
            <div class="order_line">
                <p class="order_title">Order Date:</p>
                <p class="order_details"><?php echo($users->order_date) ?></p>
            </div>
            <div class="order_line">
                <p class="order_title">Order Value:</p>
                <p class="order_details">£<?php echo($users->order_value) ?></p>
            </div>
            <a href="order_breakdown.php?sale_number=<?php echo($users->sale_number)?>" class="yellow-btn">View Order</a>
        </div>
        <hr>
        <?php endforeach; ?>
        <div class="buffer-space"></div>
    </div>
</div>


<?php include ("layout/footer.php"); ?>
