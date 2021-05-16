<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<?php include ("../tools/class_controller.php"); ?>
<?php include ("../tools/db.php"); ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Basket</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<?php $total = array(); ?>

<?php if(!isset($_SESSION['order_number'])) {
    $date = strtotime("now");
    $id = rand(00000000, 99999999);
    $order_number = ($date . $id);
} else {
    $order_number = $_SESSION['order_number'];
}
print_r($order_number);?>
<div class="nav-buffer"></div>
<div class="basket-page">
    <div class="hero-image">
        <img src="Style/images/basket-banner.png" class="hero">
    </div>
    <div class="bas-cont">
        <div class="content-column-left">
            <h1 class="is-white">Your Shopping Basket</h1>
        </div>
        <div class="content-column-right">
            <a class="right-align yellow-btn" href="checkout.php">Checkout Securely</a>
        </div>
    </div>
    <hr>
    <?php
    $vals = array_count_values($_SESSION['basket']);
    $max=count($vals);
    if ($max != 0):
        foreach ($vals as $sku => $amount):
            $basket_product_preparedStatement->execute([$sku]);
            $game = $basket_product_preparedStatement->fetchObject( 'game');
            $subtotal = ($game->product_cost)*$amount;
            $stock_check_preparedStatement->execute([$sku]);
            $stock = $stock_check_preparedStatement->fetch();
            array_push($total, $subtotal); ?>
                <div class="basket-storage">
                    <div class="basket-item-i">
                        <img src="<?php echo($game->product_image) ?>" class="games-img">
                    </div>
                    <div class="basket-item-l">
                        <p class="games-txt"><?php echo($game->product_name) ?></p>
                    </div>
                    <a class="button-trans" href="basket%20reduce.php?sku=<?php echo($sku); ?>">-</a>
                    <?php if($stock['available_stock'] < $amount):
                        echo '<script>alert("There is insufficient stock for this order. We have updated the order to reflect this.")</script>';
                        $amount = $stock['available_stock']?>
                    <input class="input-trans" type="text" value="<?php print_r($amount); ?>">
                    <?php else: ?>
                    <input class="input-trans" type="text" value="<?php print_r($amount); ?>">
                    <?php endif; ?>
                    <a class="button-trans" href="basket_increase.php?sku=<?php echo($sku); ?>">+</a>
                    <div class="basket-item-l">
                        <p class="games-txt"><?php echo($subtotal); ?></p>
                    </div>
                    <a class="button-trans" href="basket_remove_item.php?sku=<?php echo($sku); ?>">x</a>
                </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="basket-storage">
            <p class="games-txt">Your Basket is Empty.</p>
        </div>
    <?php endif; ?>
    <hr>
    <div class="basket-total">
        <div class="basket-sub-item">
            <p class="basket-txt">Basket Total:</p>
        </div>
        <div class="basket-sub-item-r">
            <?php $_SESSION['total'] = array_sum($total); ?>
            <p class="basket-txt-r"><?php echo ($_SESSION['total']); ?></p>
        </div>
    </div>
    <hr>
    <div class="basket-total">
        <div class="b-but">
            <a class="button-pink-b" href="products.php">Continue Shopping</a>
        </div>
        <div>
            <a class="yellow-btn-b" href="checkout.php">Checkout Securely</a>
        </div>
    </div>
</div>
    <?php include ("layout/footer.php"); ?>
</body>
</html>
<?php
if (!isset($_SESSION['order_number'])) {
    $_SESSION['order_number'] = $order_number;

    $user_id = rand(000000000, 9999999999);
    $order_status = 'basket';

    $transaction_preparedStatement->execute(array(
        $date,
        $order_number,
        $_SESSION['user_id'],
        gmdate("Y-m-d H:i:s", $date),
        $_SESSION['total'],
        $order_status,
    ));

}

?>
