
<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<?php include ("layout/header.php"); ?>
<header>
    <title>Past Orders</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>

<?php
// get  past order and show the details from the database
$past_order_breakdown_preparedStatement->execute([$_GET['sale_number']]);
$row = $past_order_breakdown_preparedStatement->fetchAll();
?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/your%20orders.png" class="hero">
    </div>
    <div>
        <hr>
        <?php $order_details_preparedStatement->execute([$_GET['sale_number']]);
        $sale= $order_details_preparedStatement->fetch();?>
        <div class="order_container">
            <div class="order_line">
                <p class="order_title">Order Number:</p>
                <p class="order_details"><?php echo($_GET['sale_number']) ?></p>
            </div>
            <div class="order_line">
                <p class="order_title">Order Date:</p>
                <p class="order_details"><?php echo($sale['order_date']) ?></p>
            </div>
            <div class="order_line">
                <p class="order_title">Order Value:</p>
                <p class="order_details">£<?php echo($sale['order_value']) ?></p>
            </div>
        </div>
        <hr>
    <?php
        $max=count($row);
        if ($max != 0):
            foreach ($row as $order => $line_item):
            $game_preparedStatement->execute([$line_item['product_sku']]);
            $game = $game_preparedStatement->fetchObject( 'game');
            $subtotal = ($game->product_cost)*$line_item['quantity']; ?>
                <div class="basket-storage">
                    <div class="basket-item-i">
                        <img src="<?php echo($game->product_image) ?>" class="games-img">
                    </div>
                    <div class="basket-item-l">
                        <p class="games-txt"><?php echo($game->product_name) ?></p>
                    </div>
                    <div class="basket-item-l">
                        <p class="games-txt">x<?php print_r($line_item['quantity']); ?></p>
                    </div>
                    <div class="basket-item-l">
                        <p class="games-txt">£<?php echo($subtotal); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <hr>
    <div class="central-buffer">
        <a href="past_orders.php?id=<?php echo($_SESSION['user_id']); ?>" class="yellow-btn">Back to Orders</a>
    </div>
</div>
<?php include ("layout/footer.php"); ?>
